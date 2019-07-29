<?php

namespace GitRepositoryDataGetter\app;

class Parameter {
    
    /**
     * @var string $repositoryNameWithUserPrefix
     */     
    private $repositoryNameWithUserPrefix;
    
    /**
     * @var string $repositoryBranchName
     */         
    private $repositoryBranchName;
    
    /**
     * @var string $serviceName
     */         
    private $serviceName;
    
    /**
     * @param array $parameters
     */      
    public function __construct($parameters) {
        
        if (isset($parameters[1]))
            $this->repositoryNameWithUserPrefix = $parameters[1];
        
        if (isset($parameters[2]))
            $this->repositoryBranchName = $parameters[2];        
        
        if (isset($parameters[3])) {
            $this->serviceName = $parameters[3];                
        } else {
            $this->serviceName = DEFAULT_SERVICE_NAME;
        }
    }

    /**
     * @return string $repositoryNameWithUserPrefix
     */  
    public function getRepositoryNameWithUserPrefix() {
        return $this->repositoryNameWithUserPrefix;
    }    

    /**
     * @return string $repositoryBranchName
     */ 
    public function getRepositoryBranchName() {
        return $this->repositoryBranchName;
    }    

    /**
     * @return string $serviceName
     */ 
    public function getServiceName() {
        return $this->serviceName;
    }        
}