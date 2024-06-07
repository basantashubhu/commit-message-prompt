<?php

namespace Basanta\CommitMessagePrompt\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class CommitCommand extends Command
{
    protected $signature = 'commit';

    protected $description = 'Generate commit message prompt using git diff for ai chat (chatgpt)';

    public function handle()
    {
        $process = new Process(['git', 'diff', '--staged']);
        $process->run();
        if (!$process->isSuccessful()) {
            $this->error($process->getErrorOutput());
            return;
        }
        $output = $process->getOutput();
        file_put_contents(base_path('commit.txt'), "Generate short and precise git commit message according to this diff changes:\n\n $output");

        $openNotepad = new Process(['notepad.exe', base_path('commit.txt')]);
        $openNotepad->run();

        unlink(base_path('commit.txt'));
    }
}