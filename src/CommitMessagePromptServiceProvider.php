<?php

namespace Basanta\CommitMessagePrompt;

use Illuminate\Support\ServiceProvider;

class CommitMessagePromptServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->commands([
            
        ]);
    }

}