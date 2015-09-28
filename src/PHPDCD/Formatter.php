<?php
namespace Opale\PHPDCD;

class Formatter
{
    /**
     * Displays a security report as json.
     *
     * @param array $issues An array of issues
     *
     * @return array
     */
    public function formatResults(array $issues)
    {
        $formattedIssues = [];
        $issueFormat = [
            'type' => 'issue',
            'check_name' => 'Dead code issue',
            'categories' => ['Bug Risk'],
            'content' => ['body' => 'Check if code is really used otherwise remove it'],
            'description' => 'Found code that is never called',
        ];

        foreach ($issues as $dependency => $issue) {
            $issueFormat['location'] = [
                'path' => $issue['file'],
                'lines' => ['begin' => $issue['line'], 'end' => $issue['line'] + $issue['loc']],
            ];
            $formattedIssues[] = $issueFormat;
        }

        return $formattedIssues;
    }
}
