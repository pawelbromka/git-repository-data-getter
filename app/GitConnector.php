<?php

namespace GitRepositoryDataGetter\app;

class GitConnector {

    /**
     * @var object GitServiceInterface $gitService
     */         
    private $gitService;
        
    /**
     * @param object GitServiceInterface $gitService
     */          
    public function __construct(GitServiceInterface $gitService) {
        $this->gitService = $gitService;
    }    
    
    /**
     * @return string
     */      
    public function getRecentCommitHash() {
        return $this->gitService->getRecentCommitHash();
    }
}