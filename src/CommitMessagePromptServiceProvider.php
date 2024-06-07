<?php

namespace Basanta\CommitMessagePrompt;

use Basanta\CommitMessagePrompt\Commands\CommitCommand;
use Illuminate\Support\ServiceProvider;

class CommitMessagePromptServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->commands([
            CommitCommand::class,
        ]);
    }

}