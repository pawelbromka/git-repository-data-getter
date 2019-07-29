<?php

namespace GitRepositoryDataGetter\app;

class GitRepositoryDataManager {

    /**
     * @var object Parameter $parameter
     */ 
    private $parameter;
    
    /**
     * @var object Validation $validation
     */     
    private $validation;
    
    /**
     * @param object Parameter $parameter
     * @param object Validation $validation
     */      
    public function __construct(Parameter $parameter, Validation $validation) {
        
        $this->parameter = $parameter;
        $this->validation = $validation;
        $this->validation->validateParameters($this->parameter);
    }
    
    public function processRequest() {
        
        switch ($this->parameter->getServiceName()) {
            case 'github':
                $gitService = new GitHub();
                break;                                        
                
            case 'bitbucket':
                $gitService = new BitBucket();
                break;            
                
            case 'gitlab':
                $gitService = new GitLab();
                break;            
            
            default:
                die(UNSUPPORTED_GIT_SERVICE);
                break;            
        }
        
        $gitService->setParameter($this->parameter);
        $gitConnector = new GitConnector($gitService);
        $recentCommitHash = $gitConnector->getRecentCommitHash();
                
        echo RECENT_COMMIT_HASH . $this->parameter->getRepositoryNameWithUserPrefix() . BRANCH . $this->parameter->getRepositoryBranchName() . HAS_VALUE .  $recentCommitHash;
    }
}