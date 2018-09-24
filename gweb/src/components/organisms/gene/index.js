import { h, Component } from 'preact';
import { Link } from 'preact-router/match';
import style from './style';
import LOGO from '../../../assets/logo.svg'
import Nav from '../../../components/molecules/nav'

import { connect } from 'preact-redux'
import * as actions from '../../../actions'
import reducer from '../../../reducer'

@connect(reducer, actions)
class Gene extends Component {
    constructor(props) {
        super(props)
    }

    render() {
        return (
            <section class={style.default} style={this.props.s.visibility.gene ? {bottom: 0} : {bottom: '-100%'} }>
            </section>
        )
    }
}

export default Gene
