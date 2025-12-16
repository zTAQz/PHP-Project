# Sử dụng PHP 8.1 kèm Apache
FROM php:8.1-apache

# Cài đặt extension PDO MySQL (Bắt buộc để chạy lệnh new PDO)
RUN docker-php-ext-install pdo pdo_mysql

# Copy toàn bộ code PHP vào thư mục gốc của Apache
COPY . /var/www/html/

# Mở port 80 (Mặc định của Apache)
EXPOSE 80