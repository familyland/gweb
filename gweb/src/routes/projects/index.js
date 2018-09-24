import { h, Component } from 'preact';
import { Link } from 'preact-router/match';
import { connect } from 'preact-redux'
import style from './style.css';
import * as actions from '../../actions'
import reducer from '../../reducer'

@connect(reducer, actions)
class Projects extends Component {
    constructor(props) {
        super(props)
        this.state = {}
    }

    render() {
        return (
            <div class={style.r}>
                <p>Projects</p>
            </div>
        )
    }
}

export default Projects
