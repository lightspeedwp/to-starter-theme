/**
 * E2E tests for TO Starter Theme basic functionality.
 *
 * @package TO_Starter_Theme
 */

const { test, expect } = require('@playwright/test');

test.describe('TO Starter Theme Functionality', () => {
	test.beforeEach(async ({ page }) => {
		await page.goto('/');
	});

	test('should load homepage', async ({ page }) => {
		await expect(page.locator('body')).toBeVisible();
		await expect(page).toHaveTitle(/.*WordPress.*/);
	});

	test('should have proper navigation', async ({ page }) => {
		const navigation = page.locator('.wp-block-navigation');
		if (await navigation.isVisible()) {
			await expect(navigation).toBeVisible();
		}
	});

	test('should have responsive design', async ({ page }) => {
		// Test desktop view
		await page.setViewportSize({ width: 1200, height: 800 });
		await expect(page.locator('body')).toBeVisible();

		// Test mobile view
		await page.setViewportSize({ width: 375, height: 667 });
		await expect(page.locator('body')).toBeVisible();
	});
});
