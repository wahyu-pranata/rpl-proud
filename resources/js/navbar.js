document.addEventListener('DOMContentLoaded', () => {
    const terdaftar_tab = document.getElementById('terdaftar-tab');
    const pengajuan_tab = document.getElementById('pengajuan-tab');
    const terdaftar_section = document.getElementById('terdaftar-section');
    const pengajuan_section = document.getElementById('pengajuan-section');

    terdaftar_tab.addEventListener('click', () => {
        terdaftar_section.classList.remove('hidden');
        pengajuan_section.classList.add('hidden');

        terdaftar_tab.classList.remove('unselect-tab');
        terdaftar_tab.classList.add('select-tab');

        pengajuan_tab.classList.remove('select-tab');
        pengajuan_tab.classList.add('unselect-tab');
    });

    pengajuan_tab.addEventListener('click', () => {
        pengajuan_section.classList.remove('hidden');
        terdaftar_section.classList.add('hidden');

        pengajuan_tab.classList.remove('unselect-tab');
        pengajuan_tab.classList.add('select-tab');

        terdaftar_tab.classList.remove('select-tab');
        terdaftar_tab.classList.add('unselect-tab');
    });
});