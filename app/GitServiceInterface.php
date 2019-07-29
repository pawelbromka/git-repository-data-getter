<?php

namespace GitRepositoryDataGetter\app;

interface GitServiceInterface
{
    /**
     * @param object Parameter $parameter
     */    
    public function setParameter(Parameter $parameter);
    
    /**
     * @return string
     */         
    public function getRecentCommitHash();
}