# Development Container Setup

This development container provides a complete WordPress theme development environment for the TO Starter Theme.

## What's Included

### Services
- **WordPress 6.4** with PHP 8.2 and Apache
- **MySQL 8.0** database
- **phpMyAdmin** for database management
- **MailHog** for email testing during development

### Development Tools
- **Node.js & npm** for asset building
- **WordPress CLI** for WordPress management
- **Composer** for PHP dependency management
- **PHP CodeSniffer** with WordPress Coding Standards
- **ESLint & Stylelint** for JavaScript and CSS linting
- **Playwright** for end-to-end testing
- **Xdebug** for PHP debugging

## Getting Started

1. **Open in Container**
   - Open this theme folder in VS Code
   - Click "Reopen in Container" when prompted
   - Or use Command Palette: `Remote-Containers: Reopen in Container`

2. **Wait for Setup**
   - The container will build and install dependencies automatically
   - This may take a few minutes on first setup

3. **Access Services**
   - WordPress: http://localhost:8080
   - phpMyAdmin: http://localhost:8888
   - MailHog: http://localhost:8025

## Development Workflow

### Building Assets
```bash
# Start development server with watch mode
npm run start

# Build production assets
npm run build

# Generate translation files
npm run build:pot
```

### Code Quality
```bash
# Run all linting
npm run lint:all

# Lint specific file types
npm run lint:php
npm run lint:js  
npm run lint:css

# Fix code formatting
npm run format
```

### Testing
```bash
# Run end-to-end tests
npm run test:e2e

# Run unit tests
npm run test:unit
```

### WordPress CLI
```bash
# Check WordPress status
wp --info

# Install WordPress (if needed)
wp core install --url=localhost:8080 --title="Theme Development" --admin_user=admin --admin_password=admin --admin_email=admin@example.com

# Activate theme
wp theme activate to-starter-theme
```

## File Structure

The development environment mounts the theme directory to `/workspace` inside the container:

```
/workspace/              # Theme root
├── .devcontainer/       # Container configuration
├── resources/           # Source files (JS, CSS, images)
├── public/             # Built assets
├── templates/          # Block theme templates
├── parts/              # Template parts
├── patterns/           # Block patterns
└── functions.php       # Theme functions
```

## Database Access

- **Host**: localhost (from host machine) or `db` (from container)
- **Port**: 3306
- **Database**: wordpress
- **Username**: wordpress  
- **Password**: wordpress
- **Root Password**: rootpassword

## Debugging

### PHP Debugging
Xdebug is pre-configured and ready to use:
- Set breakpoints in VS Code
- Debug port: 9003
- Xdebug logs: `/tmp/xdebug.log`

### Email Testing
All WordPress emails are caught by MailHog:
- View emails at http://localhost:8025
- No emails are sent externally during development

## Troubleshooting

### Container Won't Start
```bash
# Rebuild container
docker-compose down
docker-compose build --no-cache
```

### Permission Issues
```bash
# Fix file permissions
sudo chown -R $(whoami):$(whoami) .
```

### Node Modules Issues
```bash
# Clear and reinstall
rm -rf node_modules package-lock.json
npm install
```

### WordPress Not Accessible
- Check that port 8080 is not in use by another service
- Ensure Docker is running
- Wait for all services to be ready (check `docker-compose logs`)

## VS Code Integration

The development container includes:
- **GitHub Copilot** for AI-assisted coding
- **PHP Intelephense** for PHP language support
- **ESLint & Stylelint** extensions for real-time linting
- **WordPress Toolbox** for WordPress-specific features
- **Prettier** for code formatting
- **PHP Debug** for Xdebug integration

## Performance Tips

- Use the "Resources" tab in Docker Desktop to allocate sufficient RAM (4GB+)
- Enable file system caching for better performance
- Use `.dockerignore` to exclude unnecessary files from build context
