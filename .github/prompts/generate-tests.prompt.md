---
description: 'Generate comprehensive test suites for WordPress blocks and themes using Jest and Playwright'
mode: 'agent'
model: 'claude-3-5-sonnet'
tools: ['create_file', 'run_in_terminal']
---

# Generate WordPress Tests

Create comprehensive test suites for WordPress block themes and custom blocks using modern testing frameworks.

## Testing Strategy

### Unit Testing (Jest)

- Test individual block components in isolation
- Mock WordPress dependencies and APIs
- Test block attribute validation and sanitization
- Verify block registration and configuration
- Test utility functions and helpers

### Integration Testing

- Test block editor integration and interactions
- Verify WordPress hook and filter implementations
- Test database operations and queries
- Validate API endpoint functionality
- Test plugin/theme compatibility

### End-to-End Testing (Playwright)

- Test complete user workflows in the block editor
- Verify block insertion and configuration
- Test frontend rendering and functionality
- Validate responsive design across devices
- Test accessibility with real assistive technologies

## Test Structure

### Jest Unit Tests

```javascript
// Example block component test
import { render, screen } from '@testing-library/react';
import { CustomBlock } from '../edit';

describe( 'CustomBlock', () => {
    test( 'renders with default attributes', () => {
        const attributes = { title: 'Test Title' };
        render( <CustomBlock attributes={ attributes } /> );
        expect( screen.getByText( 'Test Title' ) ).toBeInTheDocument();
    } );
    
    test( 'handles attribute updates', () => {
        const setAttributes = jest.fn();
        const attributes = { title: '' };
        // Test implementation
    } );
} );
```

### Playwright E2E Tests

```javascript
// Example E2E test
test( 'should insert and configure custom block', async ( { page, admin } ) => {
    await admin.createNewPost();
    await page.click( 'button[aria-label="Add block"]' );
    await page.fill( '[placeholder="Search for blocks and patterns"]', 'Custom Block' );
    await page.click( 'button[aria-label="Custom Block"]' );
    
    // Configure block
    await page.fill( '[aria-label="Block title"]', 'Test Title' );
    
    // Verify block is configured
    await expect( page.locator( '.wp-block-custom-block' ) ).toContainText( 'Test Title' );
} );
```

## Accessibility Testing

### Automated A11y Tests

```javascript
import { axe, toHaveNoViolations } from 'jest-axe';

expect.extend( toHaveNoViolations );

test( 'block should not have accessibility violations', async () => {
    const { container } = render( <CustomBlock attributes={ attributes } /> );
    const results = await axe( container );
    expect( results ).toHaveNoViolations();
} );
```

### Manual Testing Checklist

- [ ] Keyboard navigation works properly
- [ ] Screen reader announces content correctly
- [ ] Color contrast meets WCAG standards
- [ ] Focus indicators are visible
- [ ] ARIA labels are meaningful

## Performance Testing

### Core Web Vitals

```javascript
test( 'block should meet performance benchmarks', async ( { page } ) => {
    await page.goto( '/test-page-with-blocks' );
    
    const metrics = await page.evaluate( () => {
        return new Promise( ( resolve ) => {
            new PerformanceObserver( ( list ) => {
                const entries = list.getEntries();
                resolve( {
                    lcp: entries.find( entry => entry.name === 'largest-contentful-paint' )?.value,
                    fid: entries.find( entry => entry.name === 'first-input-delay' )?.value,
                    cls: entries.find( entry => entry.name === 'cumulative-layout-shift' )?.value
                } );
            } ).observe( { entryTypes: [ 'web-vitals' ] } );
        } );
    } );
    
    expect( metrics.lcp ).toBeLessThan( 2500 ); // LCP < 2.5s
    expect( metrics.cls ).toBeLessThan( 0.1 );   // CLS < 0.1
} );
```

## Test Configuration

### Jest Setup

```javascript
// jest.config.js
module.exports = {
    testEnvironment: 'jsdom',
    setupFilesAfterEnv: [
        '<rootDir>/tests/setup-tests.js',
        'jest-axe/extend-expect'
    ],
    moduleNameMapping: {
        '^@wordpress/(.*)$': '<rootDir>/node_modules/@wordpress/$1'
    },
    transform: {
        '^.+\\.(js|jsx|ts|tsx)$': 'babel-jest'
    }
};
```

### Playwright Configuration

```javascript
// playwright.config.js
module.exports = {
    testDir: './tests/e2e',
    use: {
        baseURL: 'http://localhost:8080',
        screenshot: 'only-on-failure',
        video: 'retain-on-failure'
    },
    projects: [
        { name: 'chromium', use: { ...devices['Desktop Chrome'] } },
        { name: 'webkit', use: { ...devices['Desktop Safari'] } },
        { name: 'mobile', use: { ...devices['iPhone 12'] } }
    ]
};
```

Generate complete test suites with proper mocking, fixtures, and comprehensive coverage for all block functionality.
