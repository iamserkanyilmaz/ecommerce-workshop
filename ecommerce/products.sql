create table products
(
    id          bigint unsigned auto_increment
        primary key,
    name        varchar(255) not null,
    barcode     varchar(255) not null,
    stock_count int          not null,
    price       double(8, 2) not null,
    currency    varchar(255) not null,
    status      varchar(255) not null,
    created_at  timestamp    null,
    updated_at  timestamp    null
)
    collate = utf8mb4_unicode_ci;

