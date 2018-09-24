import { h, Component } from 'preact';
import { Link } from 'preact-router/match';
import style from './style';
import LOGO from '../../../assets/logo.svg'
import Nav from '../../../components/molecules/nav'

import { connect } from 'preact-redux'
import * as actions from '../../../actions'
import reducer from '../../../reducer'

@connect(reducer, actions)
class Shadow extends Component {
    constructor(props) {
        super(props)
    }

    componentDidMount() {
    }

    render() {
        return  <section class={this.props.s.visibility.gene ? style.default : style.disabled}></section>
    }
}

export default Shadow
