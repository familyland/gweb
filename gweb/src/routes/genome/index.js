import { h, Component } from 'preact';
import { Link } from 'preact-router/match';
import { connect } from 'preact-redux'
import style from './style.css';
import * as actions from '../../actions'
import reducer from '../../reducer'
import I from '../../components/layouts/i'

@connect(reducer, actions)
class Genome extends Component {
    constructor(props) {
        super(props)
        this.state = {}
    }

    render() {
        return (
            <div class={style.r}>
                <I>
                    <p>Genome</p>
                </I>
            </div>
        )
    }
}

export default Genome
