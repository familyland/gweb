import { h, Component } from 'preact';
import { connect } from 'preact-redux'
import style from './style.css';
import reducer from '../../../reducer'
import Avatar from '../../../components/molecules/avatar'
import * as actions from '../../../actions'
import { Link } from 'preact-router/match';

@connect(reducer, actions)
class Nav extends Component {
    constructor(props) {
        super(props)
        this.state = {
            items: [
                {
                    title: 'Dashboard',
                    href: '/',
                    w: 82,
                    p: 0
                },
                {
                    title: 'Contents',
                    href: '/contents/',
                    w: 68,
                    p: 82 + 37
                },
                {
                    title: 'Genome',
                    href: '/genome/',
                    w: 62,
                    p: 82 + 37 + 68 + 37
                }
            ]
        }
    }
    render() {
        let c
        this.state.items.map((item, i) => { if(this.props.s.path === item.href) {c = i} })
        let Items = this.state.items.map((item) => {return <li><Link href={item.href}>{item.title}</Link></li>})
        return (
            <nav class={style.i}>
                <ul class={style.parent}>
                    {Items}
                    <li class={style.line} style={{ width: this.state.items[c].w, left: this.state.items[c].p }}></li>
                </ul>
                <Avatar type="header" />
            </nav>
        )
    }
}
export default Nav;
