# Memo System

Memo System is a pure PHP/MySQL Application where you can Create, Read, Update, and Delete Boards and Memos

## Database Initialization

Using MySQL Commands, create a Schema named 'memo_application'
```sql
CREATE SCHEMA `memo_application`;
```

Then, create two tables which is `boards` and `memos`

Boards
```sql
CREATE TABLE `memo_application`.`boards` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(128) NULL,
  `description` VARCHAR(256) NULL,
  `created_at` DATE NULL,
  PRIMARY KEY (`id`));
```

Memos
```sql
CREATE TABLE `memo_application`.`memos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `board_id` INT NULL,
  `name` VARCHAR(128) NULL,
  `contents` VARCHAR(256) NULL,
  `created_at` DATE NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_board_idx` (`board_id` ASC),
  CONSTRAINT `fk_board`
    FOREIGN KEY (`board_id`)
    REFERENCES `memo_application`.`boards` (`id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION);
```

## Boards

Index Page - boards.php
Show Page - boards-show.php
Create Page - boards-create.php
Store Function - boards-store.php
Edit Page - boards-edit.php
Update Function - boards-update.php
Delete Function - boards-destroy.php