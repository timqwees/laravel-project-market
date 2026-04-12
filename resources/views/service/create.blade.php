@extends('componet/shablon')

@section('title', 'Создание объявления')
@section('description', 'Создание объявления исполнителем DETAIL-DEAL')

@section('content')
  <div class="page">
    <section class="content">
      <main class="panel">
        <div class="section-head">
          <div>
            <h2>Разместить новое объявление</h2>
            <p>Форма для исполнителя: сначала базовые параметры услуги, затем материалы, сроки, география и подробное описание. Важные поля выделены, а редкие параметры вынесены в спокойный второй уровень.</p>
          </div>
</div>

        <div class="form-grid">
          <div class="field full">
            <label>Название объявления или услуги *</label>
            <input class="control" type="text" value="Изготовление металлического каркаса по чертежам заказчика" />
          </div>

          <div class="field">
            <label>Категория *</label>
            <div class="select-wrap">
              <div class="select">Металлоконструкции</div>
            </div>
          </div>

          <div class="field">
            <label>Бюджет *</label>
            <input class="control" type="text" value="от 15 000 ₽" />
          </div>

          <div class="field full">
            <label>Краткое описание услуги *</label>
            <textarea class="textarea">Изготавливаем металлические каркасы, опорные конструкции и сварные элементы по техническому заданию. Работаем по чертежам, эскизам и DXF-файлам. Возможна подготовка партии под серийное производство.</textarea>
          </div>

          <div class="field full">
            <label>Материалы <span class="optional">необязательно</span></label>
            <div class="combo-wrap">
              <input class="control" type="text" value="Сталь 3 мм, профильная труба 20x20, лист 2 мм" />
              <button class="mini-add">+</button>
            </div>
            <div class="materials">
              <div class="tag">Сталь 3 мм <span>×</span></div>
              <div class="tag">Лист 2 мм <span>×</span></div>
              <div class="tag">Сварка MIG <span>×</span></div>
            </div>
          </div>

          <div class="field full">
            <label>Местоположение</label>
            <input class="control" type="text" value="Москва, ул. Электродная, 12" />
          </div>

          <div class="field">
            <label>Срок выполнения</label>
            <input class="control" type="text" value="1–2 недели" />
          </div>

          <div class="field">
            <label>Объём выполнения *</label>
            <div class="select-wrap">
              <div class="select">Любой — единичный и серийный</div>
            </div>
          </div>

          <div class="field full">
            <label>Дополнительные условия</label>
            <div class="switch-row">
              <div class="check active"><span class="check-box"></span> Возможность выполнить заказ срочно</div>
              <div class="check"><span class="check-box"></span> Работа по договору</div>
              <div class="check"><span class="check-box"></span> Доступна доставка</div>
            </div>
            <div class="helper">Отметь только то, что реально можешь гарантировать — это повышает доверие и качество откликов.</div>
          </div>

          <div class="field full">
            <label>Подробное описание объявления или услуги</label>
            <textarea class="textarea" style="min-height: 170px;">Подробно опишите, какие виды работ вы берёте, на каком оборудовании работаете, есть ли ограничения по размерам/материалам, как быстро отвечаете на заявки и какие файлы нужны для расчёта. Можно добавить информацию о минимальном заказе, постобработке, упаковке и доставке.</textarea>
          </div>
        </div>

        <div class="actions">
          <div class="actions-left">Поля, отмеченные звёздочкой, обязательны для публикации. После размещения объявление появится в каталоге исполнителей и станет доступно заказчикам для отклика.</div>
          <div class="actions-right">
            <button class="primary-btn">Разместить объявление</button>
            <button class="outline-btn">Отмена</button>
          </div>
        </div>
      </main>

      <aside class="sidebar">
        <section class="upload-card">
          <div class="upload-icon">⬆</div>
          <h3>Добавьте файлы и примеры работ</h3>
          <p>Фото, чертежи, DXF, PDF, примеры готовых изделий. Так заказчику проще понять, что именно вы делаете и какого качества ожидать.</p>
          <button class="primary-btn" style="min-height:54px; min-width: 220px;">Добавить вложения</button>
        </section>

        <section class="upload-grid">
          <div class="thumb"><div class="thumb-bar"><span>Каркас_01.jpg</span><span>Удалить</span></div></div>
          <div class="thumb"><div class="thumb-bar"><span>Сварка_деталь.png</span><span>Удалить</span></div></div>
          <div class="thumb"><div class="thumb-bar"><span>Чертёж_A3.pdf</span><span>Удалить</span></div></div>
        </section>

        <section class="sidebar-card">
          <h3>Что важно показать</h3>
          <ul>
            <li>Какие материалы и типы заказов берёшь в работу.</li>
            <li>Срок, в который реально можешь стартовать и завершить задачу.</li>
            <li>Наличие собственного оборудования или производства.</li>
            <li>Возможность срочного выполнения, доставки и закрывающих документов.</li>
          </ul>
        </section>

        <section class="sidebar-card">
          <h3>Статус объявления</h3>
          <p>Блок справа помогает быстро проверить, всё ли готово перед публикацией.</p>
          <div class="status-list">
            <div class="status-item"><span>Основные поля</span><span>Заполнено</span></div>
            <div class="status-item"><span>Описание услуги</span><span>Готово</span></div>
            <div class="status-item"><span>Прикрепления</span><span>3 файла</span></div>
            <div class="status-item"><span>Проверка перед публикацией</span><span>Осталось 1 шаг</span></div>
          </div>
        </section>
      </aside>
    </section>
</div>

<style>

    :root {
      --bg: #ececf4;
      --surface: #ffffff;
      --surface-2: #f7f8fc;
      --surface-3: #edf0f7;
      --text: #202531;
      --muted: #70778a;
      --line: #d7dceb;
      --primary: #2f80ff;
      --primary-600: #1f6ef0;
      --primary-soft: rgba(47,128,255,0.12);
      --success: #43c56a;
      --warning: #ffb648;
      --shadow: 0 14px 40px rgba(32, 37, 49, 0.08);
      --radius-xl: 28px;
      --radius-lg: 22px;
      --radius-md: 18px;
      --radius-sm: 14px;
    }

    * { box-sizing: border-box; }
    html, body { margin: 0; padding: 0; }
    body {
      font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
      background:
        radial-gradient(circle at top left, rgba(47,128,255,0.07), transparent 28%),
        linear-gradient(180deg, #eff1f8 0%, #ececf4 100%);
      color: var(--text);
      line-height: 1.4;
    }

    a { color: inherit; text-decoration: none; }
    button, input, select, textarea { font: inherit; }

    .page {
      max-width: 1440px;
      margin: 0 auto;
      padding: 24px;
    }

    .topbar {
      background: rgba(255,255,255,0.58);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255,255,255,0.7);
      border-radius: 24px;
      padding: 16px 20px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 16px;
      box-shadow: var(--shadow);
      position: sticky;
      top: 14px;
      z-index: 20;
    }

    .brand {
      display: flex;
      align-items: center;
      gap: 12px;
      min-width: 180px;
    }

    .brand-mark {
      width: 44px;
      height: 44px;
      border-radius: 14px;
      background: linear-gradient(135deg, #1d61ff, #58a6ff);
      display: grid;
      place-items: center;
      color: white;
      font-weight: 800;
      box-shadow: 0 10px 24px rgba(47,128,255,0.28);
    }

    .brand-text small {
      display: block;
      color: var(--muted);
      font-size: 12px;
      margin-top: 2px;
    }

    .nav {
      display: flex;
      align-items: center;
      gap: 10px;
      flex-wrap: wrap;
      justify-content: center;
      flex: 1;
    }

    .nav a {
      padding: 11px 16px;
      border-radius: 999px;
      color: #4a5366;
      font-weight: 600;
    }

    .nav a.active {
      background: white;
      box-shadow: 0 6px 18px rgba(32,37,49,0.08);
      color: var(--text);
    }

    .top-actions {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .ghost-btn, .primary-btn, .outline-btn, .icon-btn {
      border: none;
      border-radius: 999px;
      padding: 12px 18px;
      font-weight: 700;
      cursor: pointer;
      transition: .2s ease;
    }

    .ghost-btn {
      background: white;
      color: var(--text);
      box-shadow: 0 8px 20px rgba(32,37,49,0.06);
    }

    .primary-btn {
      background: var(--primary);
      color: white;
      box-shadow: 0 12px 24px rgba(47,128,255,0.3);
    }

    .outline-btn {
      background: transparent;
      color: var(--text);
      border: 1.5px solid rgba(47,128,255,0.28);
      box-shadow: inset 0 0 0 1px rgba(255,255,255,0.42);
    }

    .ghost-btn:hover, .primary-btn:hover, .outline-btn:hover { transform: translateY(-1px); }

    .subnav {
      margin-top: 26px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 16px;
      flex-wrap: wrap;
    }

    .crumbs {
      color: #8a91a4;
      font-size: 13px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.05em;
    }

    .crumbs span { color: #b8bdcb; margin: 0 6px; }

    .hero {
      margin-top: 14px;
      background: linear-gradient(180deg, rgba(255,255,255,0.52), rgba(255,255,255,0.36));
      border: 1px solid rgba(255,255,255,0.72);
      border-radius: 34px;
      padding: 30px;
      box-shadow: var(--shadow);
      display: grid;
      grid-template-columns: 1.2fr .8fr;
      gap: 24px;
      align-items: center;
    }

    .hero h1 {
      margin: 0;
      font-size: 46px;
      line-height: 1;
      letter-spacing: -0.04em;
    }

    .hero p {
      margin: 14px 0 0;
      max-width: 760px;
      color: #546073;
      font-size: 16px;
    }

    .hero-meta {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
      margin-top: 18px;
    }

    .meta-chip {
      padding: 10px 14px;
      border-radius: 999px;
      background: rgba(255,255,255,0.78);
      border: 1px solid rgba(47,128,255,0.10);
      color: #4d5970;
      font-weight: 700;
      font-size: 14px;
    }

    .hero-stats {
      display: grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 12px;
    }

    .stat {
      background: white;
      border-radius: 22px;
      padding: 18px;
      box-shadow: 0 10px 24px rgba(32,37,49,0.06);
      border: 1px solid rgba(233,237,246,0.92);
    }

    .stat strong {
      display: block;
      font-size: 28px;
      letter-spacing: -0.03em;
      margin-bottom: 6px;
    }

    .stat span {
      color: #5c667b;
      font-size: 14px;
      font-weight: 600;
    }

    .content {
      margin-top: 0;
      display: grid;
      grid-template-columns: minmax(0, 1fr) 360px;
      gap: 24px;
      align-items: start;
    }

    .panel {
      background: var(--surface);
      border-radius: 30px;
      padding: 26px;
      box-shadow: var(--shadow);
      border: 1px solid rgba(255,255,255,0.8);
    }

    .section-head {
      display: flex;
      justify-content: space-between;
      gap: 16px;
      align-items: flex-start;
      margin-bottom: 22px;
      flex-wrap: wrap;
    }

    .section-head h2 {
      margin: 0;
      font-size: 30px;
      line-height: 1.05;
      letter-spacing: -0.03em;
    }

    .section-head p {
      margin: 8px 0 0;
      color: var(--muted);
      max-width: 620px;
    }

    .form-grid {
      display: grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 18px 16px;
    }

    .field {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .field.full { grid-column: 1 / -1; }
    .field label {
      font-size: 15px;
      font-weight: 800;
      color: #394356;
    }

    .optional {
      color: #9aa1b3;
      font-weight: 700;
      margin-left: 4px;
      font-size: 13px;
    }

    .control, .textarea, .select, .combo {
      width: 100%;
      min-height: 58px;
      border: 1px solid var(--line);
      background: var(--surface-2);
      border-radius: 18px;
      padding: 16px 18px;
      color: var(--text);
      outline: none;
      box-shadow: inset 0 1px 0 rgba(255,255,255,0.8);
    }

    .control::placeholder, .textarea::placeholder { color: #8f97aa; }

    .textarea {
      resize: vertical;
      min-height: 124px;
    }

    .combo-wrap {
      display: grid;
      grid-template-columns: 1fr 64px;
      gap: 10px;
    }

    .mini-add {
      height: 58px;
      border-radius: 18px;
      background: var(--primary);
      color: white;
      border: 0;
      font-size: 28px;
      box-shadow: 0 12px 24px rgba(47,128,255,0.25);
    }

    .select-wrap {
      position: relative;
    }

    .select-wrap::after {
      content: "▾";
      position: absolute;
      right: 18px;
      top: 50%;
      transform: translateY(-50%);
      color: #7d8598;
      font-size: 18px;
      pointer-events: none;
    }

    .field-row {
      display: grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 16px;
    }

    .materials {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-top: 12px;
    }

    .tag {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 10px 14px;
      border-radius: 999px;
      background: var(--primary-soft);
      color: var(--primary-600);
      font-weight: 700;
      font-size: 14px;
    }

    .tag span {
      display: inline-grid;
      place-items: center;
      width: 20px;
      height: 20px;
      border-radius: 999px;
      background: rgba(47,128,255,0.18);
      font-size: 12px;
    }

    .switch-row {
      display: flex;
      flex-wrap: wrap;
      gap: 14px;
      align-items: center;
      margin-top: 4px;
    }

    .check {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      color: #475063;
      font-weight: 700;
    }

    .check-box {
      width: 22px;
      height: 22px;
      border-radius: 8px;
      border: 1.8px solid #bfc7d8;
      background: white;
      position: relative;
      flex: 0 0 22px;
    }

    .check.active .check-box {
      border-color: var(--primary);
      background: rgba(47,128,255,0.08);
    }

    .check.active .check-box::after {
      content: "";
      position: absolute;
      left: 6px;
      top: 3px;
      width: 6px;
      height: 10px;
      border-right: 2px solid var(--primary);
      border-bottom: 2px solid var(--primary);
      transform: rotate(40deg);
    }

    .helper {
      margin-top: 8px;
      color: #8b93a7;
      font-size: 13px;
      line-height: 1.45;
    }

    .actions {
      margin-top: 26px;
      padding-top: 24px;
      border-top: 1px solid var(--surface-3);
      display: flex;
      justify-content: space-between;
      gap: 16px;
      align-items: center;
      flex-wrap: wrap;
    }

    .actions-left {
      color: #8790a3;
      font-size: 13px;
      font-weight: 600;
      max-width: 520px;
    }

    .actions-right {
      display: flex;
      gap: 12px;
      flex-wrap: wrap;
    }

    .actions-right .primary-btn,
    .actions-right .outline-btn {
      min-width: 220px;
      min-height: 58px;
      font-size: 16px;
    }

    .sidebar {
      display: grid;
      gap: 18px;
    }

    .upload-card {
      background:
        linear-gradient(180deg, rgba(255,255,255,0.8), rgba(247,248,252,0.95));
      border: 1px dashed rgba(47,128,255,0.24);
      border-radius: 28px;
      padding: 24px;
      box-shadow: var(--shadow);
      text-align: center;
    }

    .upload-icon {
      width: 82px;
      height: 82px;
      margin: 0 auto 16px;
      border-radius: 24px;
      background: linear-gradient(180deg, #f8fbff, #eef4ff);
      border: 1px solid rgba(47,128,255,0.14);
      display: grid;
      place-items: center;
      font-size: 34px;
      color: var(--primary);
      box-shadow: inset 0 1px 0 rgba(255,255,255,0.9);
    }

    .upload-card h3,
    .sidebar-card h3 {
      margin: 0;
      font-size: 22px;
      letter-spacing: -0.02em;
    }

    .upload-card p,
    .sidebar-card p,
    .sidebar-card li {
      color: #5e697c;
    }

    .upload-grid {
      margin-top: 18px;
      display: grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 12px;
    }

    .thumb {
      position: relative;
      overflow: hidden;
      border-radius: 22px;
      min-height: 150px;
      background:
        radial-gradient(circle at 20% 18%, rgba(255,255,255,0.42), transparent 24%),
        linear-gradient(140deg, rgba(32, 90, 255, 0.86), rgba(43, 196, 159, 0.72)),
        linear-gradient(180deg, #cfd9ff, #94baff);
      box-shadow: 0 12px 26px rgba(32,37,49,0.12);
    }

    .thumb:nth-child(2) {
      background:
        radial-gradient(circle at 25% 18%, rgba(255,255,255,0.38), transparent 24%),
        linear-gradient(140deg, rgba(55,114,255,0.88), rgba(170,104,255,0.72)),
        linear-gradient(180deg, #d8ddff, #c1b0ff);
    }

    .thumb:nth-child(3) {
      background:
        radial-gradient(circle at 20% 18%, rgba(255,255,255,0.4), transparent 24%),
        linear-gradient(140deg, rgba(24,104,199,0.88), rgba(48,183,255,0.72)),
        linear-gradient(180deg, #c9edff, #8bd0ff);
    }

    .thumb::after {
      content: "";
      position: absolute;
      inset: 14px;
      border-radius: 18px;
      background:
        linear-gradient(135deg, rgba(255,255,255,0.16), rgba(255,255,255,0.04)),
        repeating-linear-gradient(135deg, rgba(255,255,255,0.24) 0 6px, rgba(255,255,255,0.03) 6px 18px);
      mix-blend-mode: screen;
    }

    .thumb-bar {
      position: absolute;
      left: 10px;
      right: 10px;
      bottom: 10px;
      padding: 10px 12px;
      border-radius: 16px;
      background: rgba(255,255,255,0.88);
      color: #405069;
      display: flex;
      justify-content: space-between;
      font-size: 13px;
      font-weight: 700;
      backdrop-filter: blur(6px);
      z-index: 1;
    }

    .sidebar-card {
      background: var(--surface);
      border-radius: 28px;
      padding: 24px;
      box-shadow: var(--shadow);
      border: 1px solid rgba(255,255,255,0.8);
    }

    .sidebar-card ul {
      padding-left: 18px;
      margin: 14px 0 0;
      display: grid;
      gap: 10px;
    }

    .status-list {
      display: grid;
      gap: 12px;
      margin-top: 16px;
    }

    .status-item {
      display: flex;
      justify-content: space-between;
      gap: 12px;
      padding: 14px 16px;
      border-radius: 18px;
      background: var(--surface-2);
      border: 1px solid var(--line);
      font-weight: 700;
      color: #42506a;
    }

    .status-item span:last-child {
      color: var(--muted);
      font-weight: 600;
    }

    .footer {
      margin-top: 40px;
      background: linear-gradient(180deg, rgba(255,255,255,0.44), rgba(255,255,255,0.25));
      border-radius: 32px;
      padding: 28px;
      box-shadow: var(--shadow);
      border: 1px solid rgba(255,255,255,0.65);
    }

    .footer-grid {
      display: grid;
      grid-template-columns: 1.2fr .9fr 1.2fr;
      gap: 28px;
    }

    .footer h4 { margin: 0 0 14px; font-size: 20px; }
    .footer p, .footer li { color: #586173; }
    .footer ul { padding: 0; list-style: none; margin: 0; display: grid; gap: 10px; }

    .subscribe {
      display: flex;
      gap: 10px;
      margin-top: 16px;
      flex-wrap: wrap;
    }

    .subscribe input {
      flex: 1;
      min-width: 210px;
      height: 54px;
      border-radius: 18px;
      border: 1px solid var(--line);
      background: white;
      padding: 0 16px;
    }

    .footer-bottom {
      margin-top: 24px;
      padding-top: 18px;
      border-top: 1px solid rgba(125,135,160,0.18);
      color: #7a8193;
      font-size: 13px;
      display: flex;
      justify-content: space-between;
      gap: 12px;
      flex-wrap: wrap;
    }

    @media (max-width: 1200px) {
      .hero,
      .content,
      .footer-grid { grid-template-columns: 1fr; }
      .hero h1 { font-size: 38px; }
    }

    @media (max-width: 860px) {
      .page { padding: 14px; }
      .topbar { padding: 14px; border-radius: 20px; position: static; }
      .nav { display: none; }
      .hero { padding: 22px; }
      .hero-stats { grid-template-columns: 1fr 1fr; }
      .form-grid,
      .field-row,
      .upload-grid { grid-template-columns: 1fr; }
      .actions-right { width: 100%; }
      .actions-right .primary-btn,
      .actions-right .outline-btn { flex: 1; min-width: 0; }
    }

    @media (max-width: 560px) {
      .hero h1 { font-size: 32px; }
      .hero-stats { grid-template-columns: 1fr; }
      .top-actions { width: 100%; justify-content: space-between; }
      .section-head h2 { font-size: 26px; }
    }
  </style>
@endsection
