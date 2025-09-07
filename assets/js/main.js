(function(){
  // Current year in footer
  const year = document.getElementById('year');
  if(year){ year.textContent = new Date().getFullYear(); }

  // Bootstrap validation
  const forms = document.querySelectorAll('.needs-validation');
  Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener('submit', function (event) {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  });

  // Theme toggle with localStorage
  const root = document.documentElement;
  const saved = localStorage.getItem('bs-theme');
  if(saved){ root.setAttribute('data-bs-theme', saved); }
  const toggle = document.getElementById('themeToggle');
  function applyTheme(t){
    root.setAttribute('data-bs-theme', t);
    localStorage.setItem('bs-theme', t);
  }
  if(toggle){
    toggle.addEventListener('click', () => {
      const current = root.getAttribute('data-bs-theme') || 'light';
      applyTheme(current === 'light' ? 'dark' : 'light');
    });
  }

  // Projects dynamic grid (projects.php)
  const grid = document.getElementById('projectsGrid');
  if(grid && window.PORTFOLIO_PROJECTS){
    const search = document.getElementById('search');
    const filter = document.getElementById('filter');

    function render(items){
      grid.innerHTML = items.map(p => `
        <div class="col-md-6 col-lg-4">
          <article class="card h-100 project-card shadow-sm rounded-4 overflow-hidden">
            <img src="${p.img}" class="card-img-top" alt="${p.title}">
            <div class="card-body">
              <h3 class="h5 card-title">${p.title}</h3>
              <p class="card-text text-secondary">${p.desc}</p>
              <a class="stretched-link" href="${p.link}" target="_blank" aria-label="Open project"></a>
              <div class="small text-secondary mt-2">#${p.tags.join(' #')}</div>
            </div>
          </article>
        </div>
      `).join('');
    }
    function run(){
      const q = (search?.value || '').toLowerCase();
      const t = filter?.value || 'all';
      const out = window.PORTFOLIO_PROJECTS.filter(p => {
        const matchesTag = t==='all' || p.tags.includes(t);
        const matchesText = p.title.toLowerCase().includes(q) || p.desc.toLowerCase().includes(q);
        return matchesTag && matchesText;
      });
      render(out);
    }
    search && search.addEventListener('input', run);
    filter && filter.addEventListener('change', run);
    run();
  }
})();
