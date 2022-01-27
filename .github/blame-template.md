---
title: Workflow {{ env.WORKFLOW }} failed on {{ env.EVENT }} to {{ env.BRANCH }} in {{ env.REPOSITORY }}
labels: bug, enhancement
---

A {{ env.EVENT }} to branch {{ env.BRANCH }} in {{ env.REPOSITORY }} by {{ env.ACTOR }} had workflow {{ env.WORKFLOW }} fail as a result.
This happened in commit: {{ env.GITHUB_SHA }}

{{ env.ACTOR }} has been assigned to fix this issue. 


[Failed Run](https://github.com/{{ env.REPOSITORY }}/actions/runs/{{ env.RUN_ID }})
[Codebase](https://github.com/{{env.REPOSITORY}}/tree/{{ env.SHA }})
Workflow name - ${{ env.WORKFLOW }}
Job -           ${{ env.JOB }}
status -        ${{ env.STATUS }}
