function resizePlugin() {
    // sidebar-mini
    const tabs = document.querySelectorAll('.nav')
    const sidebarResponsive = document.querySelector('.sidebar-default')
    if (window.innerWidth < 1025) {
        Array.from(tabs, (elem) => {
            if (!elem.classList.contains('flex-column') && elem.classList.contains('nav-tabs') && elem.classList.contains('nav-pills')) {
                elem.classList.add('flex-column', 'on-resize');
            }
        })
        if (sidebarResponsive !== null) {
            if (!sidebarResponsive.classList.contains('sidebar-mini')) {
                sidebarResponsive.classList.add('sidebar-mini', 'on-resize')
            }
        }
    } else {
        Array.from(tabs, (elem) => {
            if (elem.classList.contains('on-resize')) {
                elem.classList.remove('flex-column', 'on-resize');
            }
        })
        if (sidebarResponsive !== null) {
            if (sidebarResponsive.classList.contains('sidebar-mini') && sidebarResponsive.classList.contains('on-resize')) {
                sidebarResponsive.classList.remove('sidebar-mini', 'on-resize')
            }
        }
    }

}

function toolbarToggle() {
    const sidebar = document.querySelector('.sidebar')
    if (sidebar.classList.contains('sidebar-mini')) {
        sidebar.classList.remove('sidebar-mini')
    } else {
        sidebar.classList.add('sidebar-mini')
    }
}

export {
    resizePlugin,
    toolbarToggle
}