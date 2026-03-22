-- setup.sql
-- Creates the messages table for the contact form system.
-- Run this once on the InfinityFree MySQL database before using the contact form.

CREATE TABLE IF NOT EXISTS `messages` (
  `id`         INT UNSIGNED    NOT NULL AUTO_INCREMENT,
  `name`       VARCHAR(255)    NOT NULL,
  `email`      VARCHAR(255)    NOT NULL,
  `message`    TEXT            NOT NULL,
  `created_at` DATETIME        NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
