# GitHub Copilot Instructions for WordPress Block Theme Development

This document provides comprehensive guidelines for GitHub Copilot when working with the TO Starter Theme - a modern WordPress block theme codebase.

## Project Overview

- **Project Type**: WordPress Block Theme
- **WordPress Version**: 6.4+
- **PHP Version**: 8.0+
- **Build System**: @wordpress/scripts
- **Package Manager**: npm
- **Testing**: Jest (unit), Playwright (E2E)

## Development Guidelines

### Repository Structure

```
to-starter-theme/
├── style.css              # Theme header
├── functions.php          # Theme functionality
├── theme.json            # Global settings and styles
├── templates/            # Block templates
├── parts/                # Template parts
├── patterns/             # Block patterns
├── assets/               # Source assets
├── build/                # Compiled assets
└── .github/              # Development infrastructure
    ├── workflows/        # CI/CD automation
    ├── chatmodes/        # AI chat configurations
    ├── agents/           # Specialized AI agents
    ├── instructions/     # Development guidelines
    └── prompts/          # AI prompts
```

## WordPress Coding Standards

### PHP Standards (WPCS)

- **Prefix**: Use `to_starter_` for all functions and classes
- **Naming**: snake_case for functions, Pascal_Case for classes
- **Security**: Always sanitize input, escape output, use nonces
- **Documentation**: Include comprehensive DocBlocks

### JavaScript Standards

- **Framework**: React with modern hooks pattern
- **Standards**: @wordpress/eslint-plugin configuration
- **Build**: @wordpress/scripts for compilation
- **Testing**: Jest for unit tests, Playwright for E2E

### CSS Standards

- **Methodology**: BEM naming convention
- **Properties**: CSS custom properties from theme.json
- **Responsive**: Mobile-first with container queries
- **Accessibility**: WCAG 2.1 AA compliance

## Block Development Patterns

### Custom Block Creation

Use @wordpress/create-block scaffold with:
- apiVersion 3 for latest features
- Comprehensive block.json configuration
- useBlockProps for proper integration
- TypeScript for better development experience

### Block Pattern Development

- Use semantic HTML structure
- Implement proper accessibility (ARIA, heading hierarchy)
- Reference theme.json design tokens
- Include comprehensive registration metadata

## AI Development Infrastructure

### Chat Modes (`.github/chatmodes/`)

1. **theme-development.chatmode.md** - Theme architecture and development
2. **block-editor.chatmode.md** - Custom block creation and editor features
3. **accessibility.chatmode.md** - WCAG compliance and inclusive design
4. **testing.chatmode.md** - Comprehensive testing strategies

### AI Agents (`.github/agents/`)

1. **theme-architect.agent.md** - Theme structure and architecture specialist
2. **block-developer.agent.md** - Custom block development expert
3. **accessibility-specialist.agent.md** - A11y compliance and testing specialist
4. **testing-engineer.agent.md** - Comprehensive testing strategies and implementation

### Development Instructions (`.github/instructions/`)

1. **coding-standards.instructions.md** - Comprehensive coding standards for all file types
2. **theme-development.instructions.md** - Block theme architecture and best practices

### AI Prompts (`.github/prompts/`)

1. **create-pattern.prompt.md** - Generate WordPress block patterns
2. **create-block.prompt.md** - Create custom WordPress blocks
3. **code-review.prompt.md** - Comprehensive code review checklist
4. **generate-tests.prompt.md** - Create test suites for blocks and themes

## Common Prefixes and Namespaces

- **PHP Functions**: `to_starter_`
- **CSS Classes**: `.to-starter-` or `.wp-block-to-starter-`
- **Block Namespace**: `to-starter`
- **Text Domain**: `to-starter-theme`
- **CSS Custom Properties**: `--to-starter-`

## Quality Assurance Standards

### Before Committing

- [ ] Code passes all linting (ESLint, PHPCS, Stylelint)
- [ ] All tests pass (unit and E2E)
- [ ] Accessibility audit completed
- [ ] Performance impact assessed
- [ ] Cross-browser compatibility verified
- [ ] Documentation updated

### Accessibility Requirements

- Follow WCAG 2.1 AA guidelines strictly
- Use semantic HTML and proper heading hierarchy
- Implement keyboard navigation support
- Ensure 4.5:1 color contrast ratio minimum
- Test with screen readers and automated tools

### Performance Standards

- Optimize for Core Web Vitals (LCP, FID, CLS)
- Use efficient CSS and JavaScript patterns
- Implement proper code splitting and lazy loading
- Monitor bundle sizes and HTTP requests
- Test on mobile devices and slow connections

## Testing Strategy

### Unit Testing (Jest)

- Test individual block components
- Mock WordPress dependencies
- Validate block attributes and functionality
- Test utility functions and helpers

### End-to-End Testing (Playwright)

- Test complete user workflows
- Validate block editor interactions
- Test frontend rendering and functionality
- Verify responsive design across devices

### Accessibility Testing

- Automated testing with axe-core
- Manual keyboard navigation testing
- Screen reader compatibility validation
- Color contrast verification

## Security Best Practices

- Sanitize all input data using WordPress functions
- Escape all output with appropriate WordPress functions
- Use nonces for all form submissions
- Implement proper capability and permission checks
- Follow WordPress security coding standards

## Performance Optimization

- Use conditional script/style loading
- Implement efficient database queries
- Optimize images and media assets
- Use WordPress caching mechanisms
- Monitor and optimize Core Web Vitals

## Development Workflow

### Branch Strategy

- Create feature branches from `main`
- Use descriptive branch names: `feature/block-name`, `fix/issue-description`
- Never commit directly to `main`
- Open pull requests for all changes
- Delete branches after merging

### CI/CD Pipeline

- Automated testing on all pull requests
- Code quality checks (linting, standards)
- Accessibility and performance validation
- Automated deployment to staging environment

## Block-Specific Guidelines

### Block Registration

```javascript
import { registerBlockType } from '@wordpress/blocks';
import { useBlockProps } from '@wordpress/block-editor';

registerBlockType( 'to-starter/block-name', {
    edit: ( { attributes, setAttributes } ) => {
        const blockProps = useBlockProps();
        return <div { ...blockProps }>Edit component</div>;
    },
    save: ( { attributes } ) => {
        const blockProps = useBlockProps.save();
        return <div { ...blockProps }>Save component</div>;
    }
} );
```

### Theme.json Integration

Always reference design tokens from theme.json:

```css
.wp-block-to-starter-custom {
    color: var(--wp--preset--color--primary);
    font-family: var(--wp--preset--font-family--system);
    padding: var(--wp--preset--spacing--medium);
}
```

## Error Handling

- Implement comprehensive try/catch blocks
- Use WordPress error handling functions
- Provide meaningful error messages
- Log errors appropriately for debugging
- Fail gracefully with fallback content

## Documentation Standards

- Include README files for all major components
- Document all block attributes and supports
- Provide usage examples and best practices
- Include troubleshooting information
- Maintain up-to-date inline documentation

This comprehensive guide ensures consistent, high-quality WordPress block theme development following current best practices and standards.
