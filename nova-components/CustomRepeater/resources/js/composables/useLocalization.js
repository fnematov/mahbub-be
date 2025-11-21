import __ from '../utils/localization'

export function useLocalization() {
    return {
        __: (key, replace) => __(key, replace),
    }
}
