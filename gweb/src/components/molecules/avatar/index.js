import { h, Component } from 'preact';
import { Link } from 'preact-router/match';
import { connect } from 'preact-redux'
import style from './style.css';
import * as actions from '../../../actions'
import reducer from '../../../reducer'
import UNKNOWN from '../../../assets/icons/icon-anonymous.jpg'

@connect(reducer, actions)
class Avatar extends Component {
	constructor(props) {
		super(props)
        this.state = {}
    }
    render() {
        if(this.props.type === 'header') {
            return (
                <div class={style.header}>
                    <img src={UNKNOWN} width="23" height="23" alt="" />
                </div>
            )
        } else {
            return (
                <div class={style.r}>
                    <p>fdsa</p>
                </div>
            )
        }
    }
}

export default Avatar;
