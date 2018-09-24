import { h, Component } from 'preact';
import { Link } from 'preact-router/match';
import { connect } from 'preact-redux'
import style from './style.css';
import * as actions from '../../actions'
import reducer from '../../reducer'
import I from '../../components/layouts/i'
import H1 from '../../components/atoms/h1'

@connect(reducer, actions)
class Home extends Component {
    constructor(props) {
        super(props)
    }

    render() {
        return (
            <div class={style.r}>
                <I>
                    <H1 title="Today"/>
                </I>
                <ul>
                    <li>Age</li>
                    <li>Page Views</li>
                    <li>Unique User</li>
                    <li>Gender</li>
                    <li>Locale</li>
                </ul>
                <I>
                    <H1 title="Today"/>
                    <H1 title="Total"/>
                </I>
            </div>
        )
    }
}

export default Home
