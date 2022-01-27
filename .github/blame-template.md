---
title: Workflow {{ env.WORKFLOW }} failed on {{ env.EVENT }} to {{ env.BRANCH }} in {{ env.REPOSITORY }}
labels: bug, enhancement
---

A {{ env.EVENT }} to branch {{ env.BRANCH }} in {{ env.REPOSITORY }} by {{ env.ACTOR }} had workflow {{ env.WORKFLOW }} fail as a result.

Commit: {{ env.GITHUB_SHA }}

{{ env.GITHUB_ACTION_REPOSITORY }}

{{ env.ACTOR }} has been assigned to fix this issue. 


[Failed Run](https://github.com/${{ github.repository }}/actions/runs/${{ github.run_id }})
[Codebase](https://github.com/${{ github.repository }}/tree/${{ github.sha }})
Workflow name - ${{ github.workflow }}
Job -           ${{ github.job }}
status -        ${{ job.status }}
