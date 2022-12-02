<?php

namespace Technodelight\Jira\Renderer;

use Symfony\Component\Console\Output\OutputInterface;
use Technodelight\Jira\Domain\DashboardCollection;

interface DashboardRenderer
{
    public function render(OutputInterface $output, DashboardCollection $collection): void;
}