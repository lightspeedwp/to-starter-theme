# Block Pattern Creation

Create a new WordPress block pattern for the TO Starter Theme that follows these requirements:

## Pattern Specifications
- Use semantic HTML structure
- Include proper WordPress block markup
- Implement responsive design principles
- Follow accessibility guidelines (WCAG 2.1 AA)
- Use theme's CSS custom properties for styling

## Tour Operator Integration
- Consider tour/accommodation content types
- Include booking and inquiry functionality where appropriate
- Implement gallery and media display patterns
- Support destination and itinerary layouts

## Technical Requirements
- Register pattern in functions.php with proper category
- Include pattern preview and description
- Use InnerBlocks for flexible content areas
- Implement proper block supports and attributes

## Code Quality
- Follow WordPress coding standards
- Use proper escaping and sanitization
- Include comprehensive DocBlocks
- Implement proper error handling

## Example Structure
```php
register_block_pattern(
    'to-starter-theme/pattern-name',
    array(
        'title'       => __( 'Pattern Title', 'to-starter-theme' ),
        'description' => __( 'Pattern description', 'to-starter-theme' ),
        'categories'  => array( 'to-starter-theme' ),
        'content'     => '<!-- wp:group --><!-- /wp:group -->',
    )
);
```

Provide the complete pattern code with proper WordPress markup and styling.
