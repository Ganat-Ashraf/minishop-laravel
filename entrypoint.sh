#!/bin/sh

# إنشاء قاعدة البيانات لو مش موجودة
touch database/database.sqlite

# تشغيل الـ Migrations والـ Seeds
php artisan migrate:fresh --seed --force

# تشغيل السيرفر
php artisan serve --host=0.0.0.0 --port=10000