# time-to-code

A PHP web dashboard that aggregates upcoming programming-contest schedules across multiple online judges into one timezone-aware view.

Built in 2020 as a college project — undergrad work I'm keeping around for context.

## What it shows

Upcoming contests pulled from:

- **CodeChef**
- **Codeforces**
- **LeetCode**
- **AtCoder**
- **HackerEarth**
- **SPOJ**
- **TopCoder**
- Other (anything else clist.by tracks)

Each judge has its own panel, with start time converted to the viewer's timezone using an offset selector.

## Stack

- PHP (no framework — straight `require` includes)
- Plain HTML/CSS
- [clist.by](https://clist.by/) public API as the data source

## Running locally

You need a clist.by API key — create a free account at https://clist.by/ and grab one from your account settings. Then:

```bash
export CLIST_USERNAME=your_clist_username
export CLIST_API_KEY=your_clist_api_key
php -S localhost:8000
```

Open http://localhost:8000/main.php in your browser.

## Status

This is a historical project — I'm not actively maintaining it. If something is broken against the current clist.by API, PRs welcome but I may not get to fixes quickly.
