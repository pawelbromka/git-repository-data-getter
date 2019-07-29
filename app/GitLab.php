<?php

namespace GitRepositoryDataGetter\app;

use GitRepositoryDataGetter\app\GitServiceInterface;

require_once('GitServiceInterface.php');

class GitLab implements GitServiceInterface {
    
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
    
    public function getRecentCommitHash() {
        die(UNIMPLEMMENTED_GIT_SERVICE);
    }
}