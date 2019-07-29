<?php

namespace GitRepositoryDataGetter\app;

class Validation {
    
    /**
     * @param object Parameter $parameter
     */          
    public function validateParameters(Parameter $parameter) {
        
        $this->validateRepositoryNameWithUserPrefix($parameter->getRepositoryNameWithUserPrefix());
        $this->validateRepositoryBranchName($parameter->getRepositoryBranchName());
    }    

    /**
     * @param string $repositoryNameWithUserPrefix
     */      
    private function validateRepositoryNameWithUserPrefix($repositoryNameWithUserPrefix) {
        
        if (!isset($repositoryNameWithUserPrefix))
            die(NO_REPOSITORY_NAME);        
        
        if (strpos($repositoryNameWithUserPrefix, '/') === false) {
            die(INCORRECT_REPOSITORY_NAME_FORMAT);                
        }
        
        $repositoryUserName = explode('/', $repositoryNameWithUserPrefix)[0];
        $repositoryName = explode('/', $repositoryNameWithUserPrefix)[1];
    
        if (!preg_match('/^[a-z\d](?:[a-z\d]|-(?=[a-z\d])){0,38}$/i', $repositoryUserName))
            die(INCORRECT_GIT_USERNAME);
        
        if (!preg_match('/^[a-z\d](?:[a-z\d]|-(?=[a-z\d])){0,99}$/i', $repositoryName))
            die(INCORRECT_GIT_REPOSITORY_NAME);
    }        

    /**
     * @param string $repositoryBranchName
     */      
    private function validateRepositoryBranchName($repositoryBranchName) {
        
        if (!isset($repositoryBranchName))
            die(NO_BRANCH_NAME);
        
        if (!preg_match('/^[a-z\d](?:[a-z\d]|-(?=[a-z\d])){0,255}$/i', $repositoryBranchName))
            die(INCORRECT_GIT_BRANCH_NAME);            
        
    }    
    
}