export function useScriptLoader() {
    const loadScript = (src, options = {}) => {
        return new Promise((resolve, reject) => {
            // Check if script already exists
            const existingScript = document.querySelector(`script[src="${src}"]`);
            if (existingScript) {
                resolve(existingScript);
                return;
            }

            const script = document.createElement('script');
            script.src = src;
            script.async = options.async || true;
            script.defer = options.defer || true;

            if (options.id) script.id = options.id;
            if (options.type) script.type = options.type;
            if (options.crossOrigin) script.crossOrigin = options.crossOrigin;

            script.onload = () => resolve(script);
            script.onerror = () => reject(new Error(`Failed to load script: ${src}`));

            if (options.insertBefore) {
                document.head.insertBefore(script, document.head.firstChild);
            } else {
                document.head.appendChild(script);
            }
        });
    };

    const unloadScript = (src) => {
        const script = document.querySelector(`script[src="${src}"]`);
        if (script) {
            script.remove();
        }
    };

    return {
        loadScript,
        unloadScript
    };
}