/**
 * Front-end JavaScript for TO Starter Theme
 *
 * This file handles front-end interactions and functionality.
 *
 * @package TO_Starter_Theme
 */

document.addEventListener( 'DOMContentLoaded', function () {
	// Initialize theme features
	initializeNavigation();
	initializeAccessibility();
	initializeTourOperatorFeatures();
} );

/**
 * Initialize navigation functionality.
 */
function initializeNavigation() {
	// Mobile menu toggle and navigation enhancements
	const mobileMenuButton = document.querySelector( '.mobile-menu-toggle' );
	const navigation = document.querySelector( '.wp-block-navigation' );

	if ( mobileMenuButton && navigation ) {
		mobileMenuButton.addEventListener( 'click', function () {
			navigation.classList.toggle( 'is-open' );
			this.setAttribute( 'aria-expanded',
				navigation.classList.contains( 'is-open' ) ? 'true' : 'false'
			);
		} );
	}
}

/**
 * Initialize accessibility features.
 */
function initializeAccessibility() {
	// Skip link functionality
	const skipLink = document.querySelector( '.skip-link' );
	if ( skipLink ) {
		skipLink.addEventListener( 'click', function ( e ) {
			const target = document.querySelector( this.getAttribute( 'href' ) );
			if ( target ) {
				target.focus();
			}
		} );
	}
}

/**
 * Initialize tour operator specific features.
 */
function initializeTourOperatorFeatures() {
	// Gallery lightbox, booking forms, etc.
	initializeGalleries();
	initializeBookingForms();
}

/**
 * Initialize gallery functionality.
 */
function initializeGalleries() {
	// Tour and accommodation gallery enhancements
}

/**
 * Initialize booking form functionality.
 */
function initializeBookingForms() {
	// Tour booking and inquiry form enhancements
}
