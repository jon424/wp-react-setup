import React, { Component } from "react";
import { Link } from "react-router-dom";
import propTypes from "prop-types";
import axios from "axios";

export default class BookItem extends Component {
  static propTypes = {
    book: propTypes.object.isRequired,
  };

  constructor(props) {
    super(props);
    this.state = {
      imgUrl: "",
      author: "",
      isLoaded: false,
    };
  }

  componentDidMount() {
    const { featured_media, author } = this.props.book;
    const getImageUrl = axios.get(`/wp-json/wp/v2/media/${featured_media}`);
    const getAuthor = axios.get(`/wp-json/wp/v2/users/${author}`);

    Promise.all([getImageUrl, getAuthor]).then((res) => {
      this.setState({
        imgUrl: res[0].data.media_details.sizes.full.source_url,
        author: res[1].data.name,
        isLoaded: true,
      });
    });
  }

  render() {
    console.log("console.log", this.state);
    const { id, title, excerpt } = this.props.book;
    const { author, imgUrl, isLoaded } = this.state;
    if (isLoaded) {
      return (
        <div>
          <h1 style={{ marginBottom: "0" }}>{title.rendered}</h1>
          <small>
            Review by <strong>{author}</strong>
          </small>
          <div style={{ width: "45%" }}>
            <img style={{ width: "50%" }} src={imgUrl} alt={title.rendered} />
          </div>
          <div dangerouslySetInnerHTML={{ __html: excerpt.rendered }} />
          <Link to={`/book/${id}`}>Read Reviews</Link>
          <hr />
        </div>
      );
    }
    return null;
  }
}
