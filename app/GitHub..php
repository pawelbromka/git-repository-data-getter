<?php

namespace GitRepositoryDataGetter\app;

use GitRepositoryDataGetter\app\GitServiceInterface;

require_once('GitServiceInterface.php');

class GitHub implements GitServiceInterface {
    
    /**
     * @var object Parameter $parameter
     */     
    private $parameter;
    
    /**
     * @param object Parameter $parameter
     */     
    public function setParameter(Parameter $parameter) {
        $this->parameter = $parameter;
    }        
    
    /**
     * @return string $response
     * @throws \Exception     
     */     
    public function getApiResponse() {
        
        try {
            $curl_handle = curl_init();
            curl_setopt($curl_handle, CURLOPT_URL, "https://api.github.com/repos/{$this->parameter->getRepositoryNameWithUserPrefix()}/branches/{$this->parameter->getRepositoryBranchName()}");
            curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 60);
            curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl_handle, CURLOPT_USERAGENT, 'GitRepositoryDataGetter');
            $response = curl_exec($curl_handle);
            curl_close($curl_handle);
            
        } catch (\Exception $exception) {
            die(GIT_SERVICE_CONNECT_ERROR);
        }
        
        return $response;
    }
    
    /**
     * @return string $recentCommitHash
     * @throws \Exception     
     */         
    public function getRecentCommitHash()
    {
        try { 
            $response = json_decode($this->getApiResponse());
            
            if (isset($response->message))
                die(GIT_REPOSITORY_ERROR . $response->message);
            
            $recentCommitHash = $response->commit->sha;
    
        } catch (\Exception $exception) {
            die(GIT_SERVICE_DATA_ERROR);
        }    
    
        return $recentCommitHash;
    }
}