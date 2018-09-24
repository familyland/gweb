import { h, Component } from 'preact';
import { connect } from 'preact-redux'
import style from './style.css';
import Down from '../../../assets/icons/icon-down.svg'

import reducer from '../../../reducer'
import * as actions from '../../../actions'
@connect(reducer, actions)
class Select extends Component {
    constructor(props) {
        super(props)
    }

    render() {
        if(this.props.type === 'header') {
            let Items = this.props.d.projects.map((item)=>( <li>{item.title}</li>))
            let Current
            this.props.d.projects.map((item) => {
                if(item.set) {
                    Current = item.title
                }
            })
            return (
                <section class={style.header}>
                    <div class={style.headerInr}>
                        <p>{Current}<img class={style.headerArrow} src={Down} width="9" height="9" alt="" /></p>
                        <ul class={style.headerItems}>
                            {Items}
                        </ul>
                    </div>
                </section>
            )
        }
    }
}
export default Select;
