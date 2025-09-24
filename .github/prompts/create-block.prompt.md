# Custom Block Development

Develop a new custom Gutenberg block for the TO Starter Theme following WordPress best practices.

## Block Specifications
- Create block using @wordpress/create-block scaffold
- Implement block.json schema with proper attributes
- Use TypeScript/JSX for editor components
- Include PHP render callback for dynamic content

## Tour Operator Features
- Support tour and accommodation data display
- Implement booking integration capabilities
- Include gallery and media handling
- Support filtering and search functionality

## Technical Implementation
- Use WordPress components and design system
- Implement proper data validation and sanitization
- Include block variations and transforms
- Support InnerBlocks where appropriate

## Editor Experience
- Create intuitive block inspector controls
- Implement real-time preview updates
- Include block toolbar customizations
- Provide helpful placeholder states

## Performance Considerations
- Minimize JavaScript bundle size
- Implement lazy loading for media content
- Use WordPress data stores efficiently
- Optimize for Core Web Vitals

## Example Block Structure
```json
{
    "name": "to-starter-theme/block-name",
    "title": "Block Title",
    "category": "to-starter-theme",
    "description": "Block description",
    "supports": {
        "html": false,
        "align": true
    },
    "attributes": {
        "content": {
            "type": "string",
            "source": "html",
            "selector": ".content"
        }
    }
}
```

Provide complete block implementation including editor, save, and PHP components.
