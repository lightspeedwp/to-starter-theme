# E2E Tests for TO Starter Theme

This directory contains end-to-end tests for the TO Starter Theme using Playwright.

## Test Structure

- `theme-functionality.spec.js` - Tests basic theme functionality
- `tour-operator-integration.spec.js` - Tests tour operator plugin integration
- `accessibility.spec.js` - Tests accessibility compliance
- `responsive.spec.js` - Tests responsive design

## Running Tests

```bash
# Install Playwright browsers
npx playwright install

# Run all tests
npm run test:e2e

# Run tests in headed mode
npx playwright test --headed

# Run specific test file
npx playwright test theme-functionality.spec.js
```
