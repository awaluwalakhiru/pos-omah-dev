function darkModeToggle() {
    if (document.querySelector('body').classList.contains('auto')) {
        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            document.querySelector('body').classList.add('dark')
        } else {
            document.querySelector('body').classList.remove('dark')
        }
    }
}

export {
    darkModeToggle
}