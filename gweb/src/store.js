import { createStore } from 'redux'

let ACTIONS = {
    URL: ({ s, ...state }, { path }) => ({
        s: {
            ...s,
            path,
        },
        ...state
    }),
    VISIBILITY_GENE: ({ s, ...state }, { bool }) => ({
        s: {
            ...s,
            visibility: {
                ...s.visibility,
                gene: !bool
            }
        },
        ...state
    }),
}


const INITIAL = {
    s: {
        login: false,
        path: "/",
        visibility: {
            gene: false
        }
    },
    d: {
        projects: [
            {
                title: 'FamilyLand, Inc.',
                href: '',
                set: true
            },
            {
                title: 'Apple, Inc.',
                href: '',
                set: false
            },
            {
                title: 'Global Standard',
                href: '',
                set: false
            }
        ]
    }
}

export default createStore( (state, action) => (
    action && ACTIONS[action.type] ? ACTIONS[action.type](state, action) : state
), INITIAL, typeof devToolsExtension==='function' ? devToolsExtension() : undefined)
