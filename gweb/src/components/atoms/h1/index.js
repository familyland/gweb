import { h, Component } from 'preact';
import style from './style';

class H1 extends Component {
    constructor(props) {
        super(props)
    }
    render() {
        return <h1 class={style.default}>{this.props.title}</h1>
    }
}

export default H1
