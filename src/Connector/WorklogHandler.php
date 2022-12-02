<?php

namespace Technodelight\Jira\Connector;

use DateTime;
use Technodelight\Jira\Domain\Issue;
use Technodelight\Jira\Domain\Worklog;
use Technodelight\Jira\Domain\WorklogCollection;

interface WorklogHandler
{
    public function find(DateTime $from, DateTime $to): WorklogCollection;

    public function findByIssue(Issue $issue, ?int $limit = null): WorklogCollection;

    public function create(Worklog $worklog): Worklog;

    public function update(Worklog $worklog): Worklog;

    public function retrieve(int $worklogId): Worklog;

    public function delete(Worklog $worklog): bool;
}
