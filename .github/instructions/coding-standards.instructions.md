---
description: 'Comprehensive coding standards and guidelines for WordPress block theme development'
applyTo: '**.php, **.js, **.ts, **.css, **.scss, **.json'
---

# WordPress Block Development Coding Standards

This document outlines comprehensive coding standards for WordPress block themes and custom block development.

## PHP Standards (WordPress Coding Standards)

### Naming Conventions

- **Functions**: Use `theme_prefix_` with snake_case (`to_starter_get_block_pattern`)
- **Classes**: Use Pascal_Case with theme prefix (`TO_Starter_Block_Manager`)
- **Variables**: Use snake_case (`$block_attributes`, `$theme_settings`)
- **Constants**: Use UPPER_SNAKE_CASE (`TO_STARTER_VERSION`)

### Code Structure

```php
<?php
/**
 * Block pattern registration
 *
 * @package TO_Starter
 * @since 1.0.0
 */

/**
 * Register custom block pattern
 *
 * @param string $pattern_name Pattern identifier.
 * @param array  $pattern_args Pattern configuration.
 * @return bool True on success.
 */
function to_starter_register_pattern( $pattern_name, $pattern_args ) {
    // Implementation with proper sanitization
    return register_block_pattern( $pattern_name, $pattern_args );
}
```

### Security Implementation

```php
// Input sanitization
$user_input = sanitize_text_field( $_POST['field_name'] );

// Output escaping
echo esc_html( $dynamic_content );
echo wp_kses_post( $rich_content );

// Nonce verification
if ( ! wp_verify_nonce( $_POST['nonce'], 'action_name' ) ) {
    wp_die( 'Security check failed' );
}
```

## JavaScript/TypeScript Standards

### Block Development

```javascript
// Use TypeScript for better development experience
import { registerBlockType } from '@wordpress/blocks';
import { useBlockProps } from '@wordpress/block-editor';

registerBlockType( 'to-starter/custom-block', {
    edit: ( { attributes, setAttributes } ) => {
        const blockProps = useBlockProps();
        return (
            <div { ...blockProps }>
                {/* Block content */}
            </div>
        );
    },
    save: ( { attributes } ) => {
        const blockProps = useBlockProps.save();
        return (
            <div { ...blockProps }>
                {/* Saved content */}
            </div>
        );
    }
} );
```

### Modern JavaScript Patterns

- Use ES6+ features (const/let, arrow functions, destructuring)
- Implement proper error handling with try/catch
- Use async/await for asynchronous operations
- Follow WordPress data store patterns

## CSS Standards

### CSS Custom Properties (Theme.json Integration)

```css
/* Use CSS custom properties from theme.json */
.wp-block-to-starter-custom {
    color: var(--wp--preset--color--primary);
    font-family: var(--wp--preset--font-family--system);
    padding: var(--wp--preset--spacing--medium);
}

/* Responsive design with container queries */
@container (min-width: 768px) {
    .wp-block-to-starter-custom {
        display: grid;
        grid-template-columns: 1fr 2fr;
    }
}
```

### BEM Methodology

```css
/* Block */
.to-starter-card {}

/* Element */
.to-starter-card__title {}
.to-starter-card__content {}

/* Modifier */
.to-starter-card--featured {}
.to-starter-card--horizontal {}
```

## Accessibility Standards (WCAG 2.1 AA)

### Semantic HTML

```html
<!-- Proper heading hierarchy -->
<article class="wp-block-to-starter-card">
    <header>
        <h3 class="wp-block-to-starter-card__title">Card Title</h3>
    </header>
    <div class="wp-block-to-starter-card__content">
        <p>Card description with meaningful content.</p>
    </div>
    <footer>
        <a href="#" class="wp-element-button">
            Read More
            <span class="screen-reader-text">about Card Title</span>
        </a>
    </footer>
</article>
```

### ARIA Implementation

```javascript
// Block with proper ARIA labels
const blockProps = useBlockProps( {
    role: 'region',
    'aria-labelledby': 'block-title',
    'aria-describedby': 'block-description'
} );
```

### Color Contrast

- Minimum 4.5:1 ratio for normal text
- Minimum 3:1 ratio for large text
- Test with color contrast analyzers

## Quality Assurance Checklist

### Before Committing

- [ ] Code passes all linting checks (ESLint, PHPCS, Stylelint)
- [ ] All tests pass (unit and E2E)
- [ ] Accessibility audit completed (manual + automated)
- [ ] Performance impact assessed
- [ ] Cross-browser compatibility verified
- [ ] Documentation updated

### Code Review Criteria

- [ ] Follows WordPress coding standards
- [ ] Implements proper security measures
- [ ] Meets accessibility requirements
- [ ] Includes appropriate tests
- [ ] Performance optimized
- [ ] Well-documented code
