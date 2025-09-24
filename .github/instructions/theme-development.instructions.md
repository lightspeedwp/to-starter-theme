# Block Theme Development Guidelines

## Theme Structure Requirements

### Required Files
- `style.css` - Main theme stylesheet with header
- `index.html` - Required template for FSE themes
- `theme.json` - Theme configuration and styling
- `functions.php` - Theme functionality and enhancements

### Template Hierarchy
- Use `.html` templates for Full Site Editing
- Follow WordPress template hierarchy
- Implement proper fallback templates
- Use template parts for reusable components

### Block Patterns
- Create patterns for common layouts
- Register pattern categories for organization
- Use semantic HTML in pattern markup
- Test patterns across different content types

### Block Styles
- Register custom block styles via `functions.php`
- Use CSS custom properties for consistency
- Ensure styles work with theme variations
- Test with different block combinations

## Tour Operator Integration

### Plugin Compatibility
- Test with Tour Operator plugin active
- Ensure proper styling for tour post types
- Implement booking form compatibility
- Support gallery and map integrations

### Content Types
- Style tour listing pages appropriately
- Create patterns for accommodation layouts
- Design destination showcase templates
- Implement review and testimonial blocks

### SEO and Performance
- Optimize for search engines
- Implement structured data markup
- Ensure fast loading times
- Use responsive images

## Testing and Quality Assurance

### Browser Testing
- Test in Chrome, Firefox, Safari, Edge
- Verify mobile responsiveness
- Check accessibility compliance
- Validate HTML and CSS

### WordPress Testing
- Test with WordPress 6.0+
- Verify Gutenberg compatibility
- Check Classic Editor fallbacks
- Test with common plugins

### Performance Testing
- Monitor Core Web Vitals
- Test with large content sets
- Verify caching compatibility
- Optimize asset loading
