import { h, Component } from 'preact';
import style from './style';

class I extends Component {
    constructor(props) {
        super(props)
    }
    render() {
        return (
            <section class={style.default}>
                {this.props.children}
            </section>
        )
    }
}

export default I
