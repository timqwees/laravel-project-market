@extends('componet.shablon')

@section('title', 'Справочный центр — DETAIL-DEAL')
@section('description', 'Ответы на часто задаваемые вопросы по безопасной сделке, возвратам, модерации и рейтингам на платформе DETAIL-DEAL.')

@section('content')

@include('componet/content.header')

<style>
    .faq-hero {
        background: linear-gradient(135deg, #ffffff 0%, #E1F1FE 50%, #dbeafe 100%);
    }

    .faq-section {
        scroll-margin-top: 100px;
    }

    .faq-item {
        border-bottom: 1px solid #e5e7eb;
    }

    .faq-item:last-child {
        border-bottom: none;
    }

    .faq-question {
        transition: all 0.3s ease;
    }

    .faq-question:hover {
        background: #f8fafc;
    }

    .faq-answer {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s ease-out, padding 0.4s ease;
    }

    .faq-answer.active {
        max-height: 1000px;
    }

    .faq-icon {
        transition: transform 0.3s ease;
    }

    .faq-icon.active {
        transform: rotate(180deg);
    }

    .highlight-box {
        border-left: 4px solid #2563eb;
        background: #eff6ff;
    }

    .warning-box {
        border: 2px dashed #1e40af;
        background: #eff6ff;
    }

    .section-divider {
        height: 2px;
        background: linear-gradient(90deg, transparent, #2563eb, transparent);
    }

    .toc-link {
        transition: all 0.2s ease;
    }

    .toc-link:hover {
        color: #2563eb;
        padding-left: 8px;
    }

    .faq-table {
        border-collapse: collapse;
    }

    .faq-table th,
    .faq-table td {
        border: 1px solid #d1d5db;
        padding: 12px 16px;
    }

    .faq-table th {
        background: #f3f4f6;
        font-weight: 600;
    }

    .support-section {
        background: linear-gradient(135deg, #1e3a8a 0%, #1e40af 100%);
    }
</style>

<!-- Hero Section -->
<section class="faq-hero py-16 lg:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-3xl lg:text-4xl font-bold text-slate-800 mb-4">
            СПРАВОЧНЫЙ ЦЕНТР: FAQ
        </h1>
        <p class="text-lg lg:text-xl font-semibold text-slate-700 mb-8">
            ОНЛАЙН-СЕРВИС МЕТАЛЛООБРАБОТКИ «DETAIL-DEAL»
        </p>
        <p class="text-slate-600 max-w-3xl mx-auto leading-relaxed text-justify">
            Добро пожаловать в раздел помощи <strong>DETAIL-DEAL</strong>. Наша платформа создана для того, чтобы сделать процесс заказа и выполнения работ по металлообработке максимально простым и защищенным. Ниже приведены ответы на самые частые вопросы пользователей.
        </p>
    </div>
</section>

<!-- Main Content -->
<section class="py-12 lg:py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:grid lg:grid-cols-12 lg:gap-8">
            <!-- Sidebar Navigation -->
            <div class="hidden lg:block lg:col-span-3">
                <nav class="sticky top-24 space-y-1">
                    <h3 class="font-semibold text-slate-900 mb-4">Содержание</h3>
                    <a href="#section-1" class="toc-link block py-2 text-sm text-slate-600 hover:text-primary-600">
                        1. Общая концепция и роль менеджера
                    </a>
                    <a href="#section-2" class="toc-link block py-2 text-sm text-slate-600 hover:text-primary-600">
                        2. Безопасная сделка
                    </a>
                    <a href="#section-3" class="toc-link block py-2 text-sm text-slate-600 hover:text-primary-600">
                        3. Модерация и публикация
                    </a>
                    <a href="#section-4" class="toc-link block py-2 text-sm text-slate-600 hover:text-primary-600">
                        4. Возвраты и конфликты
                    </a>
                    <a href="#section-5" class="toc-link block py-2 text-sm text-slate-600 hover:text-primary-600">
                        5. Рейтинги и отзывы
                    </a>
                </nav>
            </div>

            <!-- FAQ Content -->
            <div class="lg:col-span-9 space-y-12">

                <!-- Section 1: Общая концепция и роль менеджера -->
                <div id="section-1" class="faq-section">
                    <h2 class="text-xl lg:text-2xl font-bold text-slate-800 text-center mb-8 pb-4 border-b-2 border-slate-800">
                        1. ОБЩАЯ КОНЦЕПЦИЯ И РОЛЬ МЕНЕДЖЕРА
                    </h2>

                    <div class="faq-item">
                        <button class="faq-question w-full text-left py-4 px-0 flex items-start justify-between gap-4" onclick="toggleFaq(this)">
                            <h3 class="font-semibold text-slate-800 italic text-lg">
                                В чем главная особенность сервиса?
                            </h3>
                            <i class="faq-icon fas fa-chevron-down text-slate-400 mt-1"></i>
                        </button>
                        <div class="faq-answer">
                            <div class="pb-6 text-slate-700 leading-relaxed text-justify">
                                <p class="mb-4">
                                    На <strong>DETAIL-DEAL</strong> вы не общаетесь с исполнителем или клиентом напрямую. Все коммуникации проходят через персонального менеджера. Это гарантирует, что ваши договоренности будут зафиксированы, а условия сделки — соблюдены.
                                </p>
                                <div class="warning-box p-4 rounded-lg">
                                    <p class="font-semibold text-slate-800">
                                        <i class="fas fa-exclamation-triangle text-amber-500 mr-2"></i>
                                        Важное правило:
                                    </p>
                                    <p class="text-slate-700 mt-2">
                                        Обмен прямыми контактами (телефон, email, ссылки) запрещен и блокируется автоматически. Это сделано для вашей безопасности, чтобы все этапы сделки находились под защитой системы.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 2: Безопасная сделка -->
                <div id="section-2" class="faq-section">
                    <h2 class="text-xl lg:text-2xl font-bold text-slate-800 text-center mb-8 pb-4 border-b-2 border-slate-800">
                        2. БЕЗОПАСНАЯ СДЕЛКА
                    </h2>

                    <div class="faq-item">
                        <button class="faq-question w-full text-left py-4 px-0 flex items-start justify-between gap-4" onclick="toggleFaq(this)">
                            <h3 class="font-semibold text-slate-800 italic text-lg">
                                Как обеспечивается безопасность?
                            </h3>
                            <i class="faq-icon fas fa-chevron-down text-slate-400 mt-1"></i>
                        </button>
                        <div class="faq-answer">
                            <div class="pb-6 text-slate-700 leading-relaxed text-justify">
                                <p class="mb-6">
                                    Когда вы нажимаете кнопку «Связаться», создается чат, в который подключается менеджер. Он модерирует обсуждение, помогает уточнить техническое задание и контролирует финансовые вопросы. Если возникнет спорная ситуация, история переписки в системе станет основой для справедливого решения.
                                </p>

                                <table class="faq-table w-full text-left">
                                    <thead>
                                        <tr>
                                            <th class="w-1/4">Этап</th>
                                            <th>Действие</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="font-semibold">1. Заказ</td>
                                            <td>Клиент создает заказ или выбирает услугу исполнителя.</td>
                                        </tr>
                                        <tr>
                                            <td class="font-semibold">2. Обсуждение</td>
                                            <td>Менеджер передает уточнения между сторонами, фиксирует цену и сроки.</td>
                                        </tr>
                                        <tr>
                                            <td class="font-semibold">3. Фиксация</td>
                                            <td>Любые изменения в заказе вносятся только через интерфейс с подтверждением менеджера.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 3: Модерация и публикация -->
                <div id="section-3" class="faq-section">
                    <h2 class="text-xl lg:text-2xl font-bold text-slate-800 text-center mb-8 pb-4 border-b-2 border-slate-800">
                        3. МОДЕРАЦИЯ И ПУБЛИКАЦИЯ
                    </h2>

                    <div class="faq-item">
                        <button class="faq-question w-full text-left py-4 px-0 flex items-start justify-between gap-4" onclick="toggleFaq(this)">
                            <h3 class="font-semibold text-slate-800 italic text-lg">
                                Почему мое объявление еще не опубликовано?
                            </h3>
                            <i class="faq-icon fas fa-chevron-down text-slate-400 mt-1"></i>
                        </button>
                        <div class="faq-answer">
                            <div class="pb-6 text-slate-700 leading-relaxed text-justify">
                                <p>
                                    Все объявления (и от клиентов, и от исполнителей) проходят проверку менеджером. Мы проверяем корректность описания, наличие чертежей и соответствие категории «Металлообработка».
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question w-full text-left py-4 px-0 flex items-start justify-between gap-4" onclick="toggleFaq(this)">
                            <h3 class="font-semibold text-slate-800 italic text-lg">
                                Что такое «Срочное» объявление?
                            </h3>
                            <i class="faq-icon fas fa-chevron-down text-slate-400 mt-1"></i>
                        </button>
                        <div class="faq-answer">
                            <div class="pb-6 text-slate-700 leading-relaxed text-justify">
                                <p>
                                    Вы можете пометить свой заказ или услугу значком «Срочно». Такие объявления поднимаются в начало списка поиска и привлекают больше внимания. Это платный функционал, активируемый в личном кабинете.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 4: Возвраты и конфликты -->
                <div id="section-4" class="faq-section">
                    <h2 class="text-xl lg:text-2xl font-bold text-slate-800 text-center mb-8 pb-4 border-b-2 border-slate-800">
                        4. ВОЗВРАТЫ И КОНФЛИКТЫ
                    </h2>

                    <div class="faq-item">
                        <button class="faq-question w-full text-left py-4 px-0 flex items-start justify-between gap-4" onclick="toggleFaq(this)">
                            <h3 class="font-semibold text-slate-800 italic text-lg">
                                Что делать, если работа выполнена некачественно?
                            </h3>
                            <i class="faq-icon fas fa-chevron-down text-slate-400 mt-1"></i>
                        </button>
                        <div class="faq-answer">
                            <div class="pb-6 text-slate-700 leading-relaxed text-justify">
                                <p>
                                    Если результат не соответствует согласованному в чате ТЗ, вы можете подать жалобу через кнопку в профиле или прямо в чате. Менеджер проанализирует ситуацию, изучит историю сообщений и примет решение (предупреждение, отмена заказа или блокировка нарушителя).
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question w-full text-left py-4 px-0 flex items-start justify-between gap-4" onclick="toggleFaq(this)">
                            <h3 class="font-semibold text-slate-800 italic text-lg">
                                Можно ли вернуть деньги за услуги платформы?
                            </h3>
                            <i class="faq-icon fas fa-chevron-down text-slate-400 mt-1"></i>
                        </button>
                        <div class="faq-answer">
                            <div class="pb-6 text-slate-700 leading-relaxed text-justify">
                                <p>
                                    Денежные средства за доступ к сервису или услуги продвижения (статус «Срочно») не возвращаются, так как услуга считается оказанной в момент активации функционала.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 5: Рейтинги и отзывы -->
                <div id="section-5" class="faq-section">
                    <h2 class="text-xl lg:text-2xl font-bold text-slate-800 text-center mb-8 pb-4 border-b-2 border-slate-800">
                        5. РЕЙТИНГИ И ОТЗЫВЫ
                    </h2>

                    <div class="faq-item">
                        <button class="faq-question w-full text-left py-4 px-0 flex items-start justify-between gap-4" onclick="toggleFaq(this)">
                            <h3 class="font-semibold text-slate-800 italic text-lg">
                                Как формируется рейтинг?
                            </h3>
                            <i class="faq-icon fas fa-chevron-down text-slate-400 mt-1"></i>
                        </button>
                        <div class="faq-answer">
                            <div class="pb-6 text-slate-700 leading-relaxed text-justify">
                                <p>
                                    Рейтинг — это показатель надежности пользователя. Он строится на основе истории выполненных заказов и оценок других участников. Оставить отзыв можно только <strong>после завершения сделки</strong> и его обязательного подтверждения менеджером. Это исключает накрутки и несправедливые оценки.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Support Section -->
<section class="support-section py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <p class="text-slate-300 text-sm uppercase tracking-wider mb-4">ТЕХНИЧЕСКАЯ ПОДДЕРЖКА</p>
        <h2 class="text-xl lg:text-2xl font-semibold text-white">
            Остались вопросы? Напишите своему менеджеру в разделе «Чаты» или воспользуйтесь формой обратной связи в профиле.
        </h2>
    </div>
</section>

<script>
    function toggleFaq(button) {
        const answer = button.nextElementSibling;
        const icon = button.querySelector('.faq-icon');

        // Close all other open FAQs in the same section
        const section = button.closest('.faq-section');
        const allAnswers = section.querySelectorAll('.faq-answer');
        const allIcons = section.querySelectorAll('.faq-icon');

        allAnswers.forEach((item, index) => {
            if (item !== answer && item.classList.contains('active')) {
                item.classList.remove('active');
                allIcons[index].classList.remove('active');
            }
        });

        // Toggle current FAQ
        answer.classList.toggle('active');
        icon.classList.toggle('active');
    }

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
</script>

@endsection
