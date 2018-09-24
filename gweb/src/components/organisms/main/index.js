import { h, Component } from 'preact';
import { Link } from 'preact-router/match';
import { connect } from 'preact-redux'
import style from './style';
import * as actions from '../../../actions'
import reducer from '../../../reducer'

@connect(reducer, actions)
class Main extends Component {
    constructor(props) {
        super(props)
    }

    render() {
        return (
            <main>
                {this.props.children}
            </main>
        )
    }
}
export default Main;
