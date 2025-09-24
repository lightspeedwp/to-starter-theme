---
description: 'Comprehensive code review checklist for WordPress block themes and custom blocks'
mode: 'ask'
model: 'claude-3-5-sonnet'
---

# Code Review Prompt

Perform a comprehensive code review for WordPress block theme or custom block development.

## Review Areas

### WordPress Standards Compliance

- [ ] Follows WordPress Coding Standards (WPCS) for PHP
- [ ] Uses @wordpress/eslint-plugin standards for JavaScript
- [ ] Implements WordPress security best practices
- [ ] Uses proper WordPress functions over native alternatives
- [ ] Follows WordPress file naming conventions

### Block Development Standards

- [ ] Block.json configuration is complete and valid
- [ ] Uses apiVersion 3 for latest WordPress features
- [ ] Implements useBlockProps correctly
- [ ] Follows React best practices for block components
- [ ] Includes proper block supports configuration

### Accessibility (WCAG 2.1 AA)

- [ ] Uses semantic HTML structure
- [ ] Implements proper ARIA labels and roles
- [ ] Ensures keyboard navigation support
- [ ] Maintains proper heading hierarchy
- [ ] Meets color contrast requirements (4.5:1 minimum)
- [ ] Includes screen reader support

### Performance Optimization

- [ ] Minimizes bundle size and HTTP requests
- [ ] Uses efficient CSS and JavaScript patterns
- [ ] Implements proper code splitting
- [ ] Avoids unnecessary re-renders
- [ ] Uses WordPress performance best practices

### Security Implementation

- [ ] Sanitizes all input data properly
- [ ] Escapes all output using WordPress functions
- [ ] Uses nonces for form submissions
- [ ] Implements proper capability checks
- [ ] Validates user permissions

### Testing Coverage

- [ ] Includes unit tests for JavaScript components
- [ ] Has E2E tests for user workflows
- [ ] Tests accessibility with automated tools
- [ ] Validates cross-browser compatibility
- [ ] Tests responsive design on multiple devices

### Documentation Quality

- [ ] Includes comprehensive README documentation
- [ ] Has proper inline code comments
- [ ] Documents all block attributes and supports
- [ ] Provides usage examples and best practices
- [ ] Includes troubleshooting information

## Review Output Format

Provide structured feedback with:

1. **Summary**: Overall assessment and priority issues
2. **Critical Issues**: Must-fix items for functionality/security
3. **Improvements**: Suggestions for better code quality
4. **Accessibility**: Specific a11y improvements needed
5. **Performance**: Optimization opportunities
6. **Best Practices**: WordPress-specific recommendations

Include specific code examples and suggested fixes for each issue identified.
