import { h, Component } from 'preact';
import { Link } from 'preact-router/match';
import style from './style';
import LOGO from '../../../assets/logo.svg'
import Nav from '../../../components/molecules/nav'
import Select from '../../../components/molecules/select'

import { connect } from 'preact-redux'
import * as actions from '../../../actions'
import reducer from '../../../reducer'

@connect(reducer, actions)
class Header extends Component {
    constructor(props) {
        super(props)
    }

    render() {
        return (
            <header class={style.i}>
                <div class={style.inr}>
                    <Link href="/"><img src={LOGO} width="23" height="23" alt="" /></Link>
                </div>
                <div class={style.navContainer}>
                    <Nav />
                    <Select type="header" />
                </div>
            </header>
        )
    }
}

export default Header
