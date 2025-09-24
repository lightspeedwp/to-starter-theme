# Use WordPress CLI base image with PHP 8.2
FROM wordpress:cli-php8.2

# Install system dependencies
RUN apk add --no-cache \
    git \
    curl \
    bash \
    sudo \
    openssh-client \
    mysql-client \
    nodejs \
    npm \
    composer \
    unzip \
    vim \
    less \
    jq

# Install global npm packages
RUN npm install -g \
    @wordpress/env \
    @wordpress/create-block \
    webpack \
    webpack-cli

# Install PHP extensions
RUN docker-php-ext-install \
    pdo \
    pdo_mysql \
    mysqli \
    gd \
    zip \
    exif

# Install Xdebug
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

# Configure Xdebug
RUN echo "xdebug.mode=debug" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.start_with_request=yes" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.client_host=host.docker.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.client_port=9003" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.log=/tmp/xdebug.log" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

# Install WordPress CLI
RUN curl -O https://raw.githubusercontent.com/wp-cli/wp-cli/v2.8.1/utils/wp-completion.bash \
    && mv wp-completion.bash /etc/bash_completion.d/wp-cli

# Install PHP CodeSniffer and WordPress Coding Standards
RUN composer global require "squizlabs/php_codesniffer=*" \
    && composer global require "wp-coding-standards/wpcs" \
    && composer global require "phpcompatibility/phpcompatibility-wp" \
    && composer global require "dealerdirect/phpcodesniffer-composer-installer"

# Add composer global bin to PATH
ENV PATH="/root/.composer/vendor/bin:${PATH}"

# Set up WordPress Coding Standards
RUN phpcs --config-set installed_paths /root/.composer/vendor/wp-coding-standards/wpcs,/root/.composer/vendor/phpcompatibility/php-compatibility,/root/.composer/vendor/phpcompatibility/phpcompatibility-paragonie,/root/.composer/vendor/phpcompatibility/phpcompatibility-wp

# Create a non-root user
RUN adduser -D -s /bin/bash vscode \
    && echo "vscode ALL=(ALL) NOPASSWD:ALL" >> /etc/sudoers.d/vscode

# Set working directory
WORKDIR /workspace

# Switch to non-root user for final setup
USER vscode

# Set up Playwright (will be installed via postCreateCommand)
RUN mkdir -p /home/vscode/.cache/ms-playwright

# Set up shell for better development experience
RUN echo 'alias ll="ls -la"' >> ~/.bashrc \
    && echo 'alias la="ls -la"' >> ~/.bashrc \
    && echo 'export PS1="\[\033[01;32m\]\u@\h\[\033[00m\]:\[\033[01;34m\]\w\[\033[00m\]\$ "' >> ~/.bashrc

# Default command
CMD ["/bin/bash"]
