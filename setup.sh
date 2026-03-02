#!/bin/bash

echo "🚀 Автоматическая установка Laravel проекта..."
echo "=================================================="

# Проверка наличия необходимых файлов
echo "📁 Проверка структуры проекта..."
required_files=(".env.example" "composer.json" "package.json" "vite.config.js" "artisan")
missing_files=()
for file in "${required_files[@]}"; do
    if [ -f "$file" ]; then
        echo "✅ $file - найден"
    else
        echo "❌ $file - отсутствует"
        missing_files+=("$file")
    fi
done

if [ ${#missing_files[@]} -gt 0 ]; then
    echo ""
    echo "❌ Отсутствуют необходимые файлы. Установка невозможна."
    echo "Отсутствующие файлы: ${missing_files[*]}"
    exit 1
fi

# Установка зависимостей Composer
echo ""
echo "📦 Установка Composer зависимостей..."
if [ ! -d "vendor" ] || [ ! "$(ls -A vendor)" ]; then
    echo "⬇️ Установка composer зависимостей..."
    composer install
    if [ $? -eq 0 ]; then
        echo "✅ Composer зависимости установлены"
    else
        echo "❌ Ошибка при установке Composer зависимостей"
        exit 1
    fi
else
    echo "✅ Composer зависимости уже установлены"
fi

# Установка зависимостей Node.js
echo ""
echo "📦 Установка Node.js зависимостей..."
if [ ! -d "node_modules" ] || [ ! "$(ls -A node_modules)" ]; then
    echo "⬇️ Установка npm зависимостей..."
    npm install
    if [ $? -eq 0 ]; then
        echo "✅ Node.js зависимости установлены"
    else
        echo "❌ Ошибка при установке Node.js зависимостей"
        exit 1
    fi
else
    echo "✅ Node.js зависимости уже установлены"
fi

# Настройка файла окружения
echo ""
echo "🔧 Настройка конфигурации..."
if [ ! -f ".env" ]; then
    echo "📋 Копирование .env.example в .env..."
    cp .env.example .env
    echo "✅ Файл .env создан"
else
    echo "✅ Файл .env уже существует"
fi

# Генерация APP_KEY
if ! grep -q "APP_KEY=" .env || grep -q "APP_KEY=$" .env; then
    echo "🔑 Генерация APP_KEY..."
    php artisan key:generate
    if [ $? -eq 0 ]; then
        echo "✅ APP_KEY сгенерирован"
    else
        echo "❌ Ошибка при генерации APP_KEY"
        exit 1
    fi
else
    echo "✅ APP_KEY уже сгенерирован"
fi

# Создание базы данных SQLite
echo ""
echo "🗄️ Настройка базы данных..."
if [ ! -f "database/database.sqlite" ]; then
    echo "📄 Создание базы данных SQLite..."
    touch database/database.sqlite
    echo "✅ База данных SQLite создана"
else
    echo "✅ База данных SQLite уже существует"
fi

# Выполнение миграций
echo "🔄 Выполнение миграций базы данных..."
php artisan migrate
if [ $? -eq 0 ]; then
    echo "✅ Миграции выполнены успешно"
else
    echo "⚠️ Миграции уже выполнены или произошла ошибка"
fi

# Настройка прав доступа
echo ""
echo "🔐 Настройка прав доступа..."
chmod -R 775 storage
chmod -R 775 bootstrap/cache
echo "✅ Права доступа настроены"

# Компиляция ассетов
echo ""
echo "🎨 Компиляция ассетов..."
npm run build
if [ $? -eq 0 ]; then
    echo "✅ Ассеты скомпилированы"
else
    echo "❌ Ошибка при компиляции ассетов"
    exit 1
fi

# Очистка кэша
echo ""
echo "🧹 Очистка кэша..."
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
echo "✅ Кэш очищен"

echo ""
echo "=================================================="
echo "🎉 Установка завершена успешно!"
echo ""
echo "🚀 Для запуска проекта выполните:"
echo "npm run 2  # Запуск Laravel сервера"
echo "npm run 3  # Сборка Vite с отслеживанием изменений"
echo ""
echo "Или выполните команды в отдельных терминалах:"
echo "php artisan serve"
echo "npm run dev"
echo ""
echo "Сайт будет доступен по: http://127.0.0.1:8000/"
