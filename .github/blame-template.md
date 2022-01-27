---
title: Workflow {{ env.WORKFLOW }} failed on {{ env.EVENT }} to {{ env.BRANCH }} in {{ env.REPOSITORY }}
labels: bug, enhancement
---

A {{ env.EVENT }} to branch {{ env.BRANCH }} in {{ env.REPOSITORY }} by {{ env.ACTOR }} had workflow {{ env.WORKFLOW }} fail as a result.

Commit: {{ env.GITHUB_SHA }}

{{ env.EVENT2 }}

{{ env.GITHUB_ACTION_REPOSITORY }}

{{ env.ACTOR }} has been assigned to fix this issue. 

